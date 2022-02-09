<?php


namespace App\classes;


class Word
{
    protected $inputValue;
    protected $count;
    protected $type;

    public function __construct($data=null)
    {
        if ($data){
            $this->inputValue = $data['inputValue'];
            $this->type = $data['type'];
        }

    }

    public function count(){

//        if ($this->type=='word')
//        {
//            $this->count = str_word_count($this->inputValue);
//        }
//        else
//        {
//            $this->count = strlen($this->inputValue);
//        }

        $this->count = [
            'givenWord' => "Given Word = ".$this->inputValue,
            'wordCount' => 'Total Word = '.str_word_count($this->inputValue),
            'characterCount' => 'Total Character = '.strlen($this->inputValue),
        ];

        return $this->count;

    }
    public function series(){
        
    }
}