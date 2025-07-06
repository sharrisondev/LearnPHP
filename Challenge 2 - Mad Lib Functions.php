<?php
//Function that generates the story with the inputted parameters
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
    //Ignore the users input if a value is empty and return this statement instead
    if(empty($singular_noun) || empty($verb) || empty($color) || empty($distance_unit)) {
        return "Please provide all required words.\n";
    }
    else { //Replace parts of the string
            $story = "\nThe [NOUN] are lovely, [COLOR], and deep.\nBut I have promises to keep,\nAnd [DISTANCE] to go before I [VERB],\nAnd [DISTANCE] to go before I [VERB].\n";
            $story = str_replace([
            '[NOUN]', '[COLOR]', '[DISTANCE]', '[VERB]'
            ], [$singular_noun, $color, $distance_unit, $verb], $story);
            return $story;
        }
}

//Print the three statements
echo generateStory("park", "walk", "red", "30 miles");
echo generateStory("city", "run", "green", "60 miles");
echo generateStory("town", "fly", "blue", "90 miles");