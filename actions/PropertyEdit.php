<?php 
function PropertyEdit_GET(Web $w){
    

    $form = [
        "Property Information" => [
            [
                ["Enter Your Properties Address", "text", "address"]
                
            ]
        ]
    ];

    $posturl = "propertymanager/PropertyEdit";

    $w->out(Html::multiColForm($form, $posturl));
    
}

function PropertyEdit_POST(Web $w){
    
}