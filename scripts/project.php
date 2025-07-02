<?php
class project
{
    private array $array;

    public function __construct(array $array){
        $this->array = $array;
    }

    public function getLanguages() : string { return $this->array["languages"] ?? ""; }

    public function getTitle(string $lang) : string {
        return $this->getText("title", $lang);
    }
    public function getPeriod(string $lang) : string {
        return $this->getText("period", $lang);
    }
    public function getType(string $lang) : string {
        return $this->getText("type", $lang);
    }
    public function getGroup(string $lang = '') : string {
        if ($lang === '' && $this->getText("group", $lang) === '') return '';
        return $this->getText("group", $lang);
    }
    public function getDescription(string $lang) : string {
        return $this->getText("description", $lang);
    }
    public function getCommands(string $lang) : string {
        return $this->getText("commands", $lang);
    }
    public function getInstructions(string $lang) : string {
        return $this->getText("instructions", $lang);
    }

    public function getIsAcademic() : bool { return $this->array["isAcademic"] ?? true; }
    public function getImageFileName() : array { return $this->array["imageFileName"] ?? []; }
    public function getDownloadLink() : string { return $this->array["downloadLink"] ?? "";}
    public function getGitHubLink() : string { return $this->array["gitHubLink"] ?? "";}
    public function getItchLink() : string { return $this->array["itchLink"] ?? "";}
    public function getPlay() : array { return $this->array["play"] ?? []; }

    public function getText(string $key, ?string $lang = null): string {
        $lang = $lang ?? ($_SESSION['lang'] ?? 'en');
        $value = $this->array[$key] ?? '';
        return is_array($value) ? ($value[$lang] ?? '') : $value;
    }
}
?>