<?php

class Cats {
    private string $url = "https://api.thecatapi.com/v1/breeds";
    private array $result = [];

    public function __construct(){
        $this->result = json_decode(file_get_contents($this->url));
    }

    public function filterByOrigin(string $origin) {
        return array_filter(static fn($re) => $re['origin'] === $origin, $this->result);
    }

    public function sortByParameter(string $parameter) {
        return usort($this->result, fn($a, $b) => $a[$parameter] <=> $b[$parameter]);
    }

    public function outputNameAndWiki_url() {
        foreach($this->result as $re) {
            echo "Name: ", $re['name'] , "Wikipedia url:  ", $re['wikipedia_url'];
        }
    }
}

$cats = new Cats();
$cats->filterByOrigin('France');
$cats->sortByParameter('child_friendly');





