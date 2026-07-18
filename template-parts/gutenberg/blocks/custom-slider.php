<?php
    $fields = [
        'slides' => get_field('slides') ?? '',
    ];

    // var_dump($fields);
?>

<?php foreach($fields['slides'] as $key): 
    $title = $key['title'] ?? '';    
    $text = $key['text'] ?? '';    
    $link = $key['link'] ?? '';    
    $image = $key['image'] ?? '';    
?>
    <h6>
        
    </h6>
<?php endforeach; ?>