<?php
class mreza{
    public $id;
    public $adresa;
    public $maska;
    public $sub;
    public $report;

    public $adresamreze;
    public $prvakorisna;
    public $zadnjakorisna;
    public $broadcast;

    public $sledeca;
    //public $jsonreport;

    public function __construct($id, $adresa, $maska){
        $this->id = $id;
        $this->adresa = $adresa;
        $this->maska = $maska;
        $sub = new \IPv4\SubnetCalculator($adresa, $maska);
        $sledeca = $sub->getMaxHostQuads();
        $sledeca[3] += 2;
        if ($sledeca[3] >= 255){
            $sledeca[2] += 1;
            $sledeca[3] = 0;
        }
        if ($sledeca[2] >= 255){
            $sledeca[1] += 1;
            $sledeca[2] = 0;
        }
        if ($sledeca[1] >= 255){
            $sledeca[0] += 1;
            $sledeca[1] = 0;
        }
        if ($sledeca[0]>255)
        {echo "prevec";}
        $addr = $sledeca[0] . "." . $sledeca[1] . "." . $sledeca[2] . "." . $sledeca[3];
        $this->sledeca = $addr;
        $this->adresamreze = $sub->getNetworkPortion();
        $this->prvakorisna = $sub->getMinHost();
        $this->zadnjakorisna = $sub->getMaxHost();
        $this->broadcast = $sub->getBroadcastAddress();
        //$this->jsonreport = json_encode($sub);
        //$this->jsonreport=$sub->printSubnetReport();
        //$this->report = new IPv4\SubnetReport();
    }

    public function getSledeca(){
        return $this->sledeca;
    }
    public function getAdresamreze(){
        return $this->adresamreze;
    }
    public function getPrvakorisna(){
        return $this->prvakorisna;
    }
    public function getZadnjakorisna(){
        return $this->zadnjakorisna;
    }
    public function getBroadcast(){
        return $this->broadcast;
    }

    public function getReport(){
        $sub1 = new IPv4\SubnetCalculator($this->adresa, $this->maska);
        $string = sprintf("%-18s %15s %32s \n", "{$this->adresa} / {$this->maska}", 'Decimalno', 'Binarno');
        $string .= "</br>";
        $string .= sprintf("%-18s %15s %32s \n", '------------------', '---------------', '--------------------------------');
        $string .= "</br>";
        $string .= sprintf("%-18s %15s %32s\n", 'IP Adresa:', $this->adresa, chunk_split($sub1->getIPAddressBinary(),8));
        $string .= "</br>";
        $string .= sprintf("%-18s %15s %32s\n", 'Subnet Maska:', $sub1->getSubnetMask(), chunk_split($sub1->getSubnetMaskBinary(),8));
        $string .= "</br>";
        $string .= sprintf("%-28s %s\n", 'Raspon IP Adresa:', implode(' - ', $sub1->getIPAddressRange()));
        $string .= "</br>";
        $string .= sprintf("%-28s %s\n", 'Prva korisna:', $sub1->getMinHost());
        $string .= "</br>";
        $string .= sprintf("%-28s %s\n", 'Zadnja korisna:', $sub1->getMaxHost());
        $string .= "</br>";
        $string .= sprintf("%-28s %s\n", 'Broadcast:', $sub1->getBroadcastAddress());
        $string .= PHP_EOL;
        return $string;
    }
}
