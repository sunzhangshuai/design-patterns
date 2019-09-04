<?php
/**
 * BookListReverseIterator.php :
 *
 * PHP version 7.1
 *
 * @category BookListReverseIterator
 * @package  App\Behavioral\Iterator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Iterator;


class BookListReverseIterator extends BookListIterator
{
    /**
     * BookListReverseIterator constructor.
     *
     * @param BookList $bookList
     */
    public function __construct(BookList $bookList)
    {
        parent::__construct($bookList);
        $this->currentBook = $this->bookList->count() - 1;
    }

    /**
     * Return the current book
     *
     * @link http://php.net/manual/en/iterator.current.php
     * @return Book Can return any type.
     */
    public function current()
    {
        return $this->bookList->getBook($this->key());
    }

    /**
     * (PHP 5 >= 5.0.0)
     *
     * Move forward to next element
     *
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->currentBook--;
    }

    /**
     * (PHP 5 >= 5.0.0)
     *
     * Return the key of the current element
     *
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->currentBook;
    }

    /**
     * (PHP 5 >= 5.0.0)
     *
     * Checks if current position is valid
     *
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     *       Returns true on success or false on failure.
     */
    public function valid()
    {
        return null !== $this->current();
    }

    /**
     * (PHP 5 >= 5.0.0)
     *
     * Rewind the Iterator to the first element
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->currentBook = $this->bookList->count() - 1;
    }
}
