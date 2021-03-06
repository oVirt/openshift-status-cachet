<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    // Components
    'components' => [
        'last_updated' => 'crwdns721:0crwdne721:0',
        'status'       => [
            1 => 'crwdns265:0crwdne265:0',
            2 => 'crwdns293:0crwdne293:0',
            3 => 'crwdns294:0crwdne294:0',
            4 => 'crwdns295:0crwdne295:0',
        ],
        'group' => [
            'other' => 'crwdns659:0crwdne659:0',
        ],
    ],

    // Incidents
    'incidents' => [
        'none'          => 'crwdns657:0crwdne657:0',
        'past'          => 'crwdns542:0crwdne542:0',
        'previous_week' => 'crwdns1449:0crwdne1449:0',
        'next_week'     => 'crwdns1450:0crwdne1450:0',
        'scheduled'     => 'crwdns438:0crwdne438:0',
        'scheduled_at'  => 'crwdns439:0crwdne439:0',
        'status'        => [
            0 => 'crwdns1451:0crwdne1451:0', // TODO: Hopefully remove this.
            1 => 'crwdns299:0crwdne299:0',
            2 => 'crwdns300:0crwdne300:0',
            3 => 'crwdns301:0crwdne301:0',
            4 => 'crwdns302:0crwdne302:0',
        ],
    ],

    // Service Status
    'service' => [
        'good'  => 'crwdns622:0crwdne622:0',
        'bad'   => 'crwdns1452:0crwdne1452:0',
        'major' => 'crwdns1453:0crwdne1453:0',
    ],

    'api' => [
        'regenerate' => 'crwdns271:0crwdne271:0',
        'revoke'     => 'crwdns304:0crwdne304:0',
    ],

    // Metrics
    'metrics' => [
        'filter' => [
            'last_hour' => 'crwdns625:0crwdne625:0',
            'hourly'    => 'crwdns548:0crwdne548:0',
            'weekly'    => 'crwdns549:0crwdne549:0',
            'monthly'   => 'crwdns550:0crwdne550:0',
        ],
    ],

    // Subscriber
    'subscriber' => [
        'subscribe' => 'crwdns1454:0crwdne1454:0',
        'button'    => 'crwdns490:0crwdne490:0',
        'manage'    => [
            'no_subscriptions' => 'crwdns660:0crwdne660:0',
            'my_subscriptions' => 'crwdns661:0crwdne661:0',
        ],
        'email' => [
            'subscribe'          => 'crwdns491:0crwdne491:0',
            'subscribed'         => 'crwdns492:0crwdne492:0',
            'verified'           => 'crwdns493:0crwdne493:0',
            'manage'             => 'crwdns775:0crwdne775:0',
            'unsubscribe'        => 'crwdns552:0crwdne552:0',
            'unsubscribed'       => 'crwdns495:0crwdne495:0',
            'failure'            => 'crwdns496:0crwdne496:0',
            'already-subscribed' => 'crwdns626:0crwdne626:0',
            'verify'             => [
                'text'   => 'crwdns776:0crwdne776:0',
                'html'   => 'crwdns777:0crwdne777:0',
                'button' => 'crwdns778:0crwdne778:0',
            ],
            'maintenance' => [
                'subject' => 'crwdns779:0crwdne779:0',
            ],
            'incident' => [
                'subject' => 'crwdns780:0:status:crwdne780:0',
            ],
            'component' => [
                'subject'       => 'crwdns627:0crwdne627:0',
                'text'          => 'crwdns628:0crwdne628:0',
                'html'          => 'crwdns630:0crwdne630:0',
                'tooltip-title' => 'crwdns631:0crwdne631:0',
            ],
        ],
    ],

    'users' => [
        'email' => [
            'invite' => [
                'text' => 'crwdns553:0crwdne553:0',
                'html' => 'crwdns555:0crwdne555:0',
            ],
        ],
    ],

    'signup' => [
        'title'    => 'crwdns556:0crwdne556:0',
        'username' => 'crwdns557:0crwdne557:0',
        'email'    => 'crwdns558:0crwdne558:0',
        'password' => 'crwdns559:0crwdne559:0',
        'success'  => 'crwdns560:0crwdne560:0',
        'failure'  => 'crwdns561:0crwdne561:0',
    ],

    'system' => [
        'update' => 'crwdns632:0crwdne632:0',
    ],

    // Modal
    'modal' => [
        'close'     => 'crwdns633:0crwdne633:0',
        'subscribe' => [
            'title'  => 'crwdns634:0crwdne634:0',
            'body'   => 'crwdns658:0crwdne658:0',
            'button' => 'crwdns636:0crwdne636:0',
        ],
    ],

    // Other
    'home'            => 'crwdns722:0crwdne722:0',
    'description'     => 'crwdns663:0crwdne663:0',
    'powered_by'      => 'crwdns723:0crwdne723:0',
    'about_this_site' => 'crwdns563:0crwdne563:0',
    'rss-feed'        => 'crwdns506:0crwdne506:0',
    'atom-feed'       => 'crwdns507:0crwdne507:0',
    'feed'            => 'crwdns275:0crwdne275:0',

];
