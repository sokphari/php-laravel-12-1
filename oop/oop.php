<?php
    /*
    syntax:
    class Program{
        #access midifier : public , private , protected
        #Data member or Variable
        #function member or method 
    }
    */
    class Books{
        //data member
        public $book_name;
        public $book_price;
        private $book_id;

        // public:
        // void Output(){

        // }

        // function setter
        public function setId($id){
                $this->book_id = $id;
        }
        //function getter 
        public function getId(){
            return $this->book_id;
        }

        public function OutputBooks(){
           echo "Books Name : ".$this->book_name.'<br>'; 
           echo "Books Price : ".$this->book_price.'<br>'; 
           echo "Books id : ".$this->getId()*10; 
        }

    }
    //Books book;
    $book = new Books();
    //book.OutputBooks();
    //how use outside class 
    $book->book_name = "Khmer Movie";
    $book->book_price = '20$';
    //$book->book_id = 1;
    $book->setId(10);
    $book->OutputBooks();
