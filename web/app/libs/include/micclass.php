<?

class Mic
{
    private $brand;
    public $color;
    public $usb_port;
    public $model;
    public $light;
    public $price;

    public static function test_function()
    {
        printf("This can be a static function , It can be run without object creation.");
    }

    public function __construct($brand)
    {
        print("Constructing object...");
        $this->brand = ucwords($brand);
    }

    public function getbrand()
    {
        return $this->brand;
    }

    public function setlight($light)
    {
        print($light . "\n");
        print($this->light . "\n");
    }
    private function getmodel()
    {
        return $this->model;
    }
    public function setmodel($model)
    {
        $this->model = ucwords($model);
    }
    public function getproxy()
    {
        return $this->getmodel();
    }
}
