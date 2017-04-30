# Insertion Sort

**Insertion sort** does exactly what you would expect: it inserts each element of the array into its proper position, leaving progressively larger stretches of the array sorted. What this means in practice is that the sort iterates down an array, and the part of the array already covered is in order; then, the current element of the array is inserted into the proper position at the head of the array, and the rest of the elements are moved down, using the space just vacated by the element inserted as the final space.


![Insertion Sort](insertion_sort.jpg)


#### A visualization on Insertion Sort
![Insertion sort demonstration](https://upload.wikimedia.org/wikipedia/commons/0/0f/Insertion-sort-example-300px.gif)


#### Complexity Analysis
- Worst Case - О(n<sup>2</sup>)
- Average Case - О(n<sup>2</sup>)
- Best Case - O(n)

### More on this topic
- [Insertion Sort - WikiPedia](https://en.wikipedia.org/wiki/Insertion_sort)
- [Insertion Sort - geeksforgeeks](http://quiz.geeksforgeeks.org/insertion-sort/)
