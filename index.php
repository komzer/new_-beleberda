<?php
    $textStorage = [
        ['title' => [],  'text' => [] , ],
    ];

function add (string $title, string  $text, &$textStorage){
    $textStorage[0]['text'][]= $text;
    $textStorage[0]['title'][] = $title; 
}

function remove($key, &$textStorage ) {
   if(array_key_exists($key, $textStorage[0]['text'])){
      unset($textStorage[0]['text'][$key]);
      return true;
    }else{
      return false;
    }
 
}
function edit($i, string $title, $editText, &$textStorage){
    if(array_key_exists($i, $textStorage[0][$title])){
        $textStorage[0][$title][$i] = $editText;
        return true;
    }else{
        return false;
    }
}

add ('ldls', 'pppp', $textStorage);
add ('ldls111', 'pppp111', $textStorage);
add ('ldls222', 'ppp222', $textStorage);
  print_r( $textStorage) ;
  echo "<br>";
var_dump (remove( 1, $textStorage ));
echo "<br>";
print_r( $textStorage) ;
echo "<br>";
var_dump (edit( 1, 'title', 'gogi_da_da_da', $textStorage ));
echo "<br>";
print_r( $textStorage) ;

//tyhtyrtyrtyrt