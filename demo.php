
<!DOCTYPE html>
<html>
<body>

<?php

class obj
{
    public $favcolor;
    public $favobj;

    public function set_favcolor($favcolor)
    {
        $this->favcolor = $favcolor;
    }
    public function get_favcolor()
    {
        return $this->favcolor;
    }
    public function set_favobj($favobj)
    {
        $this->favobj = $favobj;
    }
    public function get_favobj()
    {
        return $this->favobj;
    }
}

$favcolor = "blue";
$favobj = "penn";

$object = new obj();
$object->set_favcolor($favcolor);
$object->set_favobj($favobj);




switch ($object) {
    case ($object->get_favobj() == 'pen' && $object->get_favcolor() == 'blue'):
        echo "Your favorite color is red!";
        break;
    case ['blue','pen']:
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

</body>
</html>
