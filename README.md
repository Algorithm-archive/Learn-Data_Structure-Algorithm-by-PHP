# Learn Data Structure and Algorithms by PHP

> You need to have basic understanding of the PHP programming language to proceed with the codes from this repository.



## Table of Contents
- [Introduction to PHP](#introduction)
- [Data Structure](./Data%20Structure/)
  - Linked List
  - [Stack](./Data%20Structure/Stack)
  - [Queue](./Data%20Structure/Queue)
  - Binary Search Tree (BST)
  - Heap
  - Hash Table
  - Disjoint Set Union (Union Find)
  - Trie
  - Suffix Array
  - Segment Tree
  - Binary Indexed Tree (BIT)
  - Heavy Light Decomposition


- [Searching](./Searching/)
  - [Linear Search](./Searching/Linear%20Search)
  - [Binary Search](./Searching/Binary%20Search)
  - [Ternary Search](./Searching/Ternary%20Search)


- [Sorting](./Sorting/)
  - Selection Sort
  - Bubble Sort
  - Insertion Sort
  - Merge Sort
  - Quick Sort
  - Bucket Sort
  - [Counting Sort](./Sorting/Counting%20Sort)
  - Heap Sort
  - Radix Sort


- Graph Algorithms
    - Graph Representation
    - Breadth First Search (BFS)
    - Depth First Search (DFS)
    - Topological Sort
    - Strongly Connected Components (SCC)
    - Minimum Spanning Tree (MST)
    - All Pairs Shortest Path (Floyd Warshall's Algorithm)
    - Single Source Shortest Path Algorithm
        - Djkastra's Algorithm
        - Bellman Ford Algorithm
    - Directed Acyclic Graph
    - Bipartite Matching
    - Articulation Point, Bridge
    - Euler Tour/Path
    - Hamiltonian Cycle
    - Stable Marriage Problem
    - Chinese Postman Problem
    - 2-satisfiability
    - Flow Algorithms
        - Maximum Flow
        - Minimum Cut
        - Min-Cost Max Flow
        - Maximum Bipartite Matching
        - Vertex Cover

- Dynamic Programming
    - Rod Cutting
    - Maximum Sum (1D, 2D)
    - Coin Change
    - Longest Common Subsequence
    - Longest Increasing Subsequence
    - Matrix Multiplication
    - Edit Distance (Levenshtein distance)
    - 0/1 Knapsack
    - Travelling Salesman Problem
    - Optimal Binary Search Tree


- Greedy Algorithms
    - Activity Selection/Task Scheduling
    - Huffman Coding
    - Knapsack Problem (Fractional Knapsack)


- String Algorithms
    - Rabin-Karp Algorithm
    - Knuth-Morris-Pratt Algorithm
    - Z Algorithm
    - Aho-Korasick Algorithm
    - Manachers Algorithm
    - Boyr-Moore Algorithm


- Number Theory
    - Greatest Common Divisor (GCD)
    - Longest Common Multiplier (LCM)
    - Euler Totient (Phi)
    - Prime finding(Sieve of Eratosthenes)
    - Prime factorization
    - Factorial
    - Fibonacci
    - Counting, Permutation, combination
    - Exponentiation    
    - Big Mod
    - Euclid, Extended euclid
    - Josephus Problem
    - Farey Sequence
    - Catalan numbers
    - Burnside's lemma/circular permutation
    - Modular inverse
    - Probability
    - Chinese Remainder Theorem
    - Gaussian Elmination method
    - Dilworth's Theorem
    - Matrix Exponentiation


- Computational Geometry
    - Pick's Theorem
    - Convex hull
    - Line Intersection
    - Point in a polygon
    - Area of a polygon
    - Line Sweeping
    - Polygon intersection
    - Closest Pair


- Game Theory
    - Take Away Game
    - Nim's Game
    - Sprague-grundy Number

 - Others
    - BackTracking
        - N-Queen's Problem

---

## Introduction

PHP is a **dynamic language** with **Weak Typing**. That means you don't have to declare the type of a variable ahead of time. The type will get determined automatically while the program is being processed. That also means that variables are not "bound" to a specific data type.:
```php
$foo = "x";    // foo contains a string
$foo = $foo + 2; // foo concatenates with a number
echo $foo;  
```

### Data Types in PHP

PHP supports the following data types:

- Four scalar types:

    - [boolean](http://php.net/manual/en/language.types.boolean.php) (`True` and `False`)
    - [integer](http://php.net/manual/en/language.types.integer.php) (Positive and negative numbers)
    - [float](http://php.net/manual/en/language.types.float.php) (Floating point numbers)
    - [string](http://php.net/manual/en/language.types.string.php) (series of characters)

- Four compound types:
    - [array](http://php.net/manual/en/language.types.array.php)
    - [object](http://php.net/manual/en/language.types.object.php)
    - [callable](http://php.net/manual/en/language.types.callable.php)
    - iterable

- Two special types
    - [NULL](http://php.net/manual/en/language.types.null.php)
    - [resource](http://php.net/manual/en/language.types.resource.php)


#### More details about data types in PHP:

- [Data Types - PHP manual](http://php.net/manual/en/language.types.intro.php)
- [PHP Data Types - W3Schools](https://www.w3schools.com/php/php_datatypes.asp)

#### Object Oriented Programming in PHP

- [Object oriented PHP - Tutorialspoint](https://www.tutorialspoint.com/php/php_object_oriented.htm)
- [Object oriented PHP for beginners - Tutsplus](https://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762)


### Big-O Notation and Time Complexity Analysis

[Algorithms in plain English: time complexity and Big-O notation](https://medium.freecodecamp.com/time-is-complex-but-priceless-f0abd015063c)

[Big-O Cheat Sheet Link](http://bigocheatsheet.com/)

### How to Use

If you have PHP installed in your machine you can easily run a PHP file using:
```
php file_name.php
```
If `php` command not working in your terminal/command line, then you might need to add it to your environment Path.


### Useful Links:
* [Algorithms, 4th Edition (book by: Robert Sedgewick and Kevin Wayne)](http://algs4.cs.princeton.edu/home/)
* [PHP the right way](http://www.phptherightway.com/)
* [Hacking with PHP](http://www.hackingwithphp.com/)
