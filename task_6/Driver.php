<?php


class Driver extends Worker
{
    private $driving_experience;
    private $category = [];

    public function setDriveExp($drive_exp)
    {
        $this->driving_experience = $drive_exp;
    }

    public function getDriveExp()
    {
        return $this->driving_experience;
    }

    public function setCat($cat)
    {
        $this->category = $this->checkCat($cat);

    }

    public function getCat()
    {
        return $this->category;
    }

    public function checkCat($cat)
    {
        if (($cat == 'A') || ($cat == 'B') || ($cat == 'C')) {
            $caT = $this->category;
            if (!in_array($cat, $caT)) {
                $caT[] = $cat;
            }
            return $caT;
        }else{
            return $this->category;
        }
    }
}
