<?php

trait FrontendField {
    public $designSkill = "Figma";
    public $frontendDevelopmentSkill = ["HTML","CSS","JS","API"];

    public function prototypeOnFigma() {
        return "Frontend Designer can create design on Figma";
    }

    public function frontendDevelop() {
        return "developed webiste with ". join(",",$this->frontendDevelopmentSkill);
    }
}

trait BackendField {
    public $systemDesign = "Understanding the requirement of System";
    public $databaseSkill = "mysql";
    public $backendLanguage = ["NODE","PHP"];

}

trait DeploymentField {
    public $shareHosting = "cPanel";
    public $cloud = "AWS";
}


class FullStackDeveloper {
    use FrontendField,BackendField,DeploymentField;
}

$me = new FullStackDeveloper;
print_r($me);