<?php

namespace App\Integration\Jira;

use GuzzleHttp\Client;
use Itav\Component\Serializer\Serializer;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Controller
{
    const JIRA_MAIN_URL = 'https://sylwester7799.atlassian.net';
    private $jiraProjectKey = 'PM';
    private $jiraPriorityKey = 'High';

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;
    private $auth;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => self:: JIRA_MAIN_URL]);
        $this->auth = [JIRA_LOGIN, JIRA_PASSWD];
        $this->serializer = new Serializer();
    }

    public function getMilestones(Application $app, Request $request)
    {
        $key = "/rest/api/2/project/{$this->jiraProjectKey}/versions";
        $res = $this->client->get($key, ['auth' => $this->auth]);

        $code = $res->getStatusCode();
        $content = $res->getBody()->getContents();

        $ms = $this->serializer->denormalize(json_decode($content, true), Milestone::class . '[]');
        $milestones = array_filter($ms, function (Milestone $item) {
            return $item->getReleased() ? false : true;
        });
        print_r($milestones);
        $projects = [];
        /** @var Milestone[] $milestones */
        foreach ($milestones as $milestone) {
            $ver = $milestone->getName();
            $tasks = $this->getTasks($ver);
            print_r($milestone);
//            array_walk($tasks, function (Task $item, Milestone $milestone) {
//                $item->setParent((!$item->getParent()) ?: $milestone->getId());
//            });
            $projects[$milestone->getId()] = $tasks;
        }
        print_r($projects);
        return '';
    }

    public function getTasks($ver)
    {
        $key = "/rest/api/2/search";
        $json = <<<JSON
            {
                "jql": "project={$this->jiraProjectKey} AND priority={$this->jiraPriorityKey} AND fixVersion=$ver",
                "startAt": 0,
                "maxResults": 150,
                "fields": [
                    "summary",
                    "status",
                    "assignee"
                ],
                "fieldsByKeys": true
            }
JSON;

        $res = $this->client->get($key, [
            'auth' => $this->auth,
            'query' => json_decode($json, true),
        ]);
        $code = $res->getStatusCode();
        $content = $res->getBody()->getContents();
        $result = json_decode($content, true);
        $tasks = [];
        foreach ($result['issues'] as $issue) {
            $task = new Task();
            $task
                ->setId($issue['id'])
                ->setText($issue['key'] . ' - ' . $issue['fields']['summary']);
            $tasks[] = $task;
        }
        return $tasks;
    }
}
