<?php

$colors = [
    'reset'         => 39,
    'default'       => 39,
    'black'         => 30,
    'red'           => 31,
    'green'         => 32,
    'yellow'        => 33,
    'blue'          => 34,
    'magenta'       => 35,
    'cyan'          => 36,
    'light-gray'    => 37,
    'dark-gray'     => 90,
    'light-red'     => 91,
    'light-green'   => 92,
    'light-yellow'  => 93,
    'light-blue'    => 94,
    'light-magenta' => 95,
    'light-cyan'    => 96,
    'white'         => 97
];

$styles = [
    'reset'     => 0,
    'default'   => 0,
    'bold'      => 1,
    'dim'       => 2,
    'underline' => 4,
    'blink'     => 5, //Not working on most Terminals
    'inverted'  => 7,
    'hidden'    => 8
];

$OUTPUT = fopen("php://stdout", "w");

function CLIwrite(string $text): void
{
    global $OUTPUT;
    fwrite($OUTPUT, $text);
}

function CLIchangeTextColor(string $colorName='default'): void
{
    global $OUTPUT, $colors;
    $textColor = $colors[$colorName];
    fwrite($OUTPUT, "\e[{$textColor}m");
}

function CLIchangeBackgroundColor(string $colorName='default'): void
{
    global $OUTPUT, $colors;
    $backgroundColor = $colors[$colorName]+10;
    fwrite($OUTPUT, "\e[{$backgroundColor}m");
}

function CLIchangeTextStyle(string $styleList='default'): void
{
    global $OUTPUT, $styles;
    $styleList = explode(" ", $styleList);

    foreach($styleList as $style)
    {
        fwrite($OUTPUT, "\e[{$styles[$style]}m");
    }
}
