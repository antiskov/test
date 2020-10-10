<?php

Event::listen('evolution.OnPageNotFound', function ($params){
    $modx = EvolutionCMS();
    switch ($_GET['q']){
        case 'newform':
            echo View::make('form.ContactForm');
            die();
            break;
        case 'feedbackajaxform':
            echo $modx->runSnippet('FormLister', array(
               'formid' => 'ContactForm',
                'to' => 'antiskov@gmail.com',
                'subject' => 'Message from test tusk site',
                'api' => '2',
                'protectSubmit' => '0',
                'submitLimit' => '0',
                'rules' => [
                    'name' => [
                        'required' => 'Enter your name'
                    ],
                    'email' => [
                        'required' => 'Enter your email',
                        'email' => 'Incorrect email'
                    ],
                    'message' => [
                        'required' => 'Enter your question',
                    ]
                ],
                'successTpl' => '@B_FILE:form/successTpl',
                'formTpl' => '@B_FILE:form/ContactForm',
                'reportTpl' => '@B_FILE:form/ContactFormReport',
                'templatePath' => 'views/'
            ));
            die();
            break;
    }
});