<?php

namespace gsisouza\I18nForFrameworker {

    class I18N {
        private string $language;
        private string $folder;

        /**
         * @param string $language
         * @param string $folder
         */
        public function __construct(string $language, string $folder = 'languages') {
            $this->language = $language;
            $this->folder = $folder;
        }

        /**
         * @param $key
         * @return mixed
         */
        public function translate($key): string
        {
            $filePath = $this->folder . '/' . $this->language . '.json';

            if (file_exists($filePath)) {
                $jsonData = file_get_contents($filePath);
                $translations = json_decode($jsonData, true);

                return $translations[$key] ?? $key;
            } else {
                return $key;
            }
        }
    }
}