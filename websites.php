<?php
        $keyWord  = null;
        // TODO: read $keyWord
        $keyWord = $keyWord->toURL = function() {
            // TODO: URL encoding
        };

        class Wiki {
            public $url = "http://wikipedia.org/";
            public $name = "Wikipedia";

            public function getParagraph($keyWord) {
                $url = "http://en.wikipedia.org/w/api.php?format=json&action=query&titles=" .
                    $keyWord . "&prop=revisions&rvprop=content";
                // TODO:
            }
        }

        class Twitter {
            public $url = "http://twitter.com/";
            public $name = "Twitter";
            public function searchHashTag($keyWord) {
                $keyUrl = "https://twitter.com/search?q=" . $keyWord . "&src=hash";
                // TODO:
            }
        }