<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $type;
    protected $tempStart;
    protected $tempEnd;

    public function  __construct($data = null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
        $this->type = $data['type'];
        $this->tempStart = $data['tempStart'];
        $this->tempEnd = $data['tempEnd'];
    }

    public function index()
    {
//    echo "Hello World";
//        for($this-> i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
//        {
//            $this->result .= $this->i. ' ';
//        }
        if ($this->type == 'desc')
        {
            if ($this->startingNumber > $this->endingNumber)
            {
                $this->tempStart = $this->startingNumber;
                $this->tempEnd   = $this->endingNumber;
            }
            else
            {
                $this->tempStart = $this->endingNumber;
                $this->tempEnd   = $this->startingNumber;
            }

        for($this-> i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i. ' ';

        }
    }
//        return $this->result;
        else if ($this->type == 'asc')
    {
        if ($this->startingNumber > $this->endingNumber)
        {
            $this->tempStart = $this->startingNumber;
            $this->tempEnd   = $this->endingNumber;
        }
        else
        {
            $this->tempStart = $this->endingNumber;
            $this->tempEnd   = $this->startingNumber;
        }
    }
        for($this-> i = $this->tempStart; $this->i <= $this->tempEnd; $this->i++)
        {
            $this->result .= $this->i. ' ';
        }
    }