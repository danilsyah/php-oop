<?php

trait A{
    function dotA():void{
        echo "a". PHP_EOL;
    }

    function dotB():void{
            echo "b". PHP_EOL;
    }
}

trait B{
    function dotA():void{
        echo "A". PHP_EOL;
    }

    function dotB():void{
        echo "B". PHP_EOL;
    }

}

class Sample{
    use A, B{
        // gunakan function dotA dari trait A dari pada trait B
        A::dotA insteadOf B;
        // gunakan function dotB dari trait B dari pada trait A
        B::dotB insteadOf A;
    }

}

$sample = new Sample();
$sample->dotA();
$sample->dotB();

