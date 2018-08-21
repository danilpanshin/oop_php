<?php

interface Reader
{
    public function read(): array;
}

interface Writer 
{
    public function write(array $data);
}

interface Converter
{
    public function convert($item);
}

class Import
{
    public $reader;
    public $writer;
    public $converters = [];

    public function from(ArrayReader $reader) 
    {
        $this->reader = $reader;
        return $this;        
    }

    public function to(ArrayWriter $writer)
    {
        $this->writer = $writer;
        return $this;
    } 

    public function with(Converter $converter)
    {
        $this->converters[] = $converter;
        return $this;
    }

    public function import()
    {
        $data = $this->reader->read();



        $this->writer->write($data);
    }
}

class ArrayReader implements Reader
{
    private $inputArray = [];
    
    public function __construct()
    {
        $this->inputArray = [1, 2, 3, 4, 5];
    }

    public function read(): array
    {
        return $this->inputArray;
    }      
} 

class ArrayWriter
{
    public $data;
    public function write(array $data)
    {
        $this->data = $data;
    }
}

class ArrayConverter
{
    public function convert($item)
    {
        $item++;
        return $item;
    }
}
// $reader = new ArrayReader();
// var_dump($reader->read());
$converter = new ArrayConverter;
var_dump($converter->convert(4));

