# Quick Sort

**Quick sort** is based on the divide-and-conquer approach based on the idea of choosing one element as a pivot element and partitioning the array around it such that: Left side of pivot contains all the elements that are less than the pivot element Right side contains all elements greater than the pivot

It reduces the space complexity and removes the use of the auxiliary array that is used in merge sort. Selecting a random pivot in an array results in an improved time complexity in most of the cases.

Like Merge Sort, Quick Sort is a Divide and Conquer algorithm. It picks an element as pivot and partitions the given array around the picked pivot. There are many different versions of Quick Sort that pick pivot in different ways.

- Always pick first element as pivot.
- Always pick last element as pivot (implemented below)
- Pick a random element as pivot.
- Pick median as pivot.

The principle of the quicksort algorithm is this:

- Pick a “pivot” element.
- “Partition” the array into 3 parts:
    - First part: all elements in this part is less than the pivot.
    - Second part: the pivot itself (only one element!)
    - Third part: all elements in this part is greater than or equal to the pivot.
- Then, apply the quicksort algorithm to the first and the third part. (recursively)

![Quick Sort](./images/quick-sort.gif)

#### Complexity Analysis
- Worst Case - O(n<sup>2</sup>)
- Average Case - O(nlogn)
- Best Case - O(nlogn)

### More on this topic
- [Quick Sort - Wikipedia](https://en.wikipedia.org/wiki/Quicksort)
- [Quick Sort - KhanAcademy Tutorial](https://www.khanacademy.org/computing/computer-science/algorithms/quick-sort/a/overview-of-quicksort)
- [Understanding Quicksort (with interactive demo)](http://me.dt.in.th/page/Quicksort/)
- [Quick Sort - HackerEarch Tutorial](https://www.hackerearth.com/practice/algorithms/sorting/quick-sort/tutorial/)
- [Computer science in JavaScript: Quicksort](https://www.nczonline.net/blog/2012/11/27/computer-science-in-javascript-quicksort/)
