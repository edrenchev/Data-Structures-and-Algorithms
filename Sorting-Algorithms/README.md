<article class="markdown-body entry-content" itemprop="text">



<h1><a id="user-content-sorting-algorithms" class="anchor" href="#sorting-algorithms" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Sorting Algorithms</h1>

<h2><a id="user-content-quicksort-mergesort-etc" class="anchor" href="#quicksort-mergesort-etc" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>QuickSort, MergeSort, etc...</h2>

<p></p>
    <p>Data Structures and Algorithms</p>
    <p>Telerik Software Academy</p>
    <a href="http://academy.telerik.com"></a><a href="http://academy.telerik.com">http://academy.telerik.com</a> 
<p></p>





<h1><a id="user-content-table-of-contents" class="anchor" href="#table-of-contents" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Table of Contents</h1>

<ul>
<li><a href="#sortingAlgorithm">Sorting</a>

<ul>
<li><a href="#classification">Sorting and classification</a></li>
</ul></li>
<li><a href="#selection">Review of the most popular sorting algorithms</a>

<ul>
<li><a href="#selection">Selection sort</a></li>
<li><a href="#bubble">Bubble sort</a></li>
<li><a href="#insertion">Insertion sort</a></li>
<li><a href="#quick">Quick sort</a></li>
<li><a href="#merge">Merge sort</a></li>
<li><a href="#heap">Heap sort</a></li>
<li><a href="#counting">Counting sort</a></li>
<li><a href="#bucket">Bucket sort</a></li>
</ul></li>
</ul>









<h1><a id="user-content-what-is-a-sorting-algorithm" class="anchor" href="#what-is-a-sorting-algorithm" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-sortingAlgorithm"></a>What is a Sorting Algorithm?</h1>

<ul>
<li>Sorting algorithm

<ul>
<li>An algorithm that <strong>puts elements</strong> of a list in a <strong>certain order</strong> (most common lexicographically)</li>
</ul></li>
<li>More formally:

<ul>
<li>The output is <strong>in some (non-decreasing) order</strong></li>
<li>The output is <strong>a permutation</strong> of the input</li>
</ul></li>
<li>Efficient sorting is important for

<ul>
<li>Producing human-readable output</li>
<li>Canonicalizing data</li>
<li>Optimizing the use of other algorithms</li>
</ul></li>
<li>Sorting presents many important techniques</li>
</ul>



<h1><a id="user-content-classification" class="anchor" href="#classification" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-classification"></a>Classification</h1>

<ul>
<li>Sorting algorithms are often classified by

<ul>
<li>Computational <strong>complexity</strong>

<ul>
<li><strong>worst</strong>, <strong>average</strong> and <strong>best</strong> behavior</li>
</ul></li>
<li><strong>Memory</strong> usage</li>
<li>Recursive or non-recursive</li>
<li><strong>Stability</strong></li>
<li>Whether or not they are a comparison sort</li>
<li>General method

<ul>
<li>insertion, exchange (bubble sort and quicksort), selection (heapsort), merging, serial or parallel…</li>
</ul></li>
</ul></li>
</ul>



<h1><a id="user-content-stability-of-sorting" class="anchor" href="#stability-of-sorting" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Stability of Sorting</h1>

<ul>
<li>Stable sorting algorithms 

<ul>
<li>Maintain the relative order of records with equal values</li>
</ul></li>
<li>If two items compare as equal, then their relative order will be preserved

<ul>
<li>When sorting only part of the data is examined when determining the sort order</li>
</ul></li>
</ul>

<p><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/stability.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/stability.png" style="max-width:100%;"></a></p>











<h1><a id="user-content-selection-sort" class="anchor" href="#selection-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-selection"></a>Selection sort</h1>

<ul>
<li>Very simple and very inefficient algorithm

<ul>
<li>Best, worst and average case: <code>n</code><sup><code>2</code></sup></li>
<li>Memory: <code>1</code> (constant, only for the min element)</li>
<li>Stable: No</li>
<li>Method: Selection</li>
</ul></li>
</ul>

<div class="highlight highlight-source-cs"><pre>  <span class="pl-k">for</span> j = <span class="pl-c1">0</span> ... n-<span class="pl-c1">2</span>
      <span class="pl-c">// find the best element in a[j .. n-1]</span>
      best = j;
      <span class="pl-k">for</span> i = j + <span class="pl-c1">1</span> ... n -<span class="pl-c1">1</span>
          <span class="pl-k">if</span> a[i] &lt; a[best]
            best = i;
      <span class="pl-k">if</span> best <span class="pl-k">is</span> not j
        swap a[j], a[best]</pre></div>

<ul>
<li><a href="http://en.wikipedia.org/wiki/Selection_sort">http://en.wikipedia.org/wiki/Selection_sort</a></li>
</ul>













<h1><a id="user-content-bubble-sort" class="anchor" href="#bubble-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-bubble"></a>Bubble sort</h1>

<ul>
<li>Repeatedly stepping through the list

<ul>
<li>Comparing each pair of adjacent items

<ul>
<li>Swap them if they are in the wrong order</li>
</ul></li>
<li>Best case: <code>n</code>, worst and average case: <code>n</code><sup><code>2</code></sup></li>
<li>Memory: <code>1</code>, Stable: Yes, Method: Exchanging</li>
</ul></li>
</ul>

<div class="highlight highlight-source-cs"><pre><span class="pl-k">while</span> swapIsDone
  swapIsDone = <span class="pl-c1">false</span>
  <span class="pl-k">for</span> i = <span class="pl-c1">0</span> ... n - <span class="pl-c1">1</span>
    <span class="pl-k">if</span> a[i-<span class="pl-c1">1</span>] &gt; a[i]
      swap a[i] a[i-i]
      swapIsDone = <span class="pl-c1">true</span></pre></div>

<ul>
<li><a href="http://en.wikipedia.org/wiki/Bubble_sort">http://en.wikipedia.org/wiki/Bubble_sort</a></li>
</ul>













<h1><a id="user-content-insertion-sort" class="anchor" href="#insertion-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-insertion"></a>Insertion sort</h1>

<ul>
<li>Builds the final sorted array one item at a time

<ul>
<li>Best case: <code>n</code>, worst and average case: <code>n</code><sup><code>2</code></sup></li>
<li>Memory: <code>1</code>, Stable: Yes, Method: Insertion</li>
</ul></li>
</ul>

<div class="highlight highlight-source-cs"><pre><span class="pl-k">for</span> i = <span class="pl-c1">1</span> ... n - <span class="pl-c1">1</span>
  valueToInsert = a[i]
  holePos = i
  <span class="pl-k">while</span> holePos &gt; <span class="pl-c1">0</span> and valueToInsert &lt; A[holePos - <span class="pl-c1">1</span>]
    a[holePos] = A[holePos - <span class="pl-c1">1</span>] <span class="pl-c">// shift the larger value up</span>
    holePos = holePos - <span class="pl-c1">1</span>       <span class="pl-c">// move the hole position down</span>
  A[holePos] = valueToInsert</pre></div>

<ul>
<li><a href="http://en.wikipedia.org/wiki/Insertion_sort">http://en.wikipedia.org/wiki/Insertion_sort</a></li>
</ul>













<h1><a id="user-content-quicksort" class="anchor" href="#quicksort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-quick"></a>Quicksort</h1>

<ul>
<li>First divides a large list into two smaller sub-lists then recursively sort the sub-lists

<ul>
<li>Best and average case: <code>n*log(n)</code>, worst: <code>n</code><sup><code>2</code></sup></li>
<li>Memory: <code>log(n)</code> stack space</li>
<li>Stable: Depends</li>
<li>Method: Partitioning</li>
</ul></li>
</ul>

<div class="highlight highlight-source-cs"><pre>function quicksort(<span class="pl-s"><span class="pl-pds">'</span>array<span class="pl-pds">'</span></span>)
  <span class="pl-k">if</span> len(<span class="pl-s"><span class="pl-pds">'</span>array<span class="pl-pds">'</span></span>) &lt;= <span class="pl-c1">1</span>:
    <span class="pl-k">return</span>
  <span class="pl-k">select</span> and <span class="pl-k">remove</span> a pivot <span class="pl-k">value</span> <span class="pl-k">from</span> <span class="pl-s"><span class="pl-pds">'</span>array<span class="pl-pds">'</span></span>
  create empty lists <span class="pl-s"><span class="pl-pds">'</span>less<span class="pl-pds">'</span></span> and <span class="pl-s"><span class="pl-pds">'</span>greater<span class="pl-pds">'</span></span>
  <span class="pl-k">for</span> each <span class="pl-s"><span class="pl-pds">'</span>x<span class="pl-pds">'</span></span> <span class="pl-k">in</span> <span class="pl-s"><span class="pl-pds">'</span>array<span class="pl-pds">'</span></span>:
    <span class="pl-k">if</span> <span class="pl-s"><span class="pl-pds">'</span>x<span class="pl-pds">'</span></span> &lt;= <span class="pl-s"><span class="pl-pds">'</span>pivot<span class="pl-pds">'</span></span>:
      append <span class="pl-s"><span class="pl-pds">'</span>x<span class="pl-pds">'</span></span> to <span class="pl-s"><span class="pl-pds">'</span>less<span class="pl-pds">'</span></span>
    <span class="pl-k">else</span>:
      append <span class="pl-s"><span class="pl-pds">'</span>x<span class="pl-pds">'</span></span> to greater
  <span class="pl-k">return</span> concatenate (quicksort(<span class="pl-s"><span class="pl-pds">'</span>less<span class="pl-pds">'</span></span>), <span class="pl-s"><span class="pl-pds">'</span>pivot<span class="pl-pds">'</span></span>, quicksort(<span class="pl-s"><span class="pl-pds">'</span>greater<span class="pl-pds">'</span></span>))</pre></div>

<ul>
<li><a href="http://en.wikipedia.org/wiki/Quicksort">http://en.wikipedia.org/wiki/Quicksort</a>
<div>Stable implementation</div></li>
</ul>













<h1><a id="user-content-merge-sort" class="anchor" href="#merge-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-merge"></a>Merge Sort</h1>

<ul>
<li>Conceptually, a merge sort works as follows

<ul>
<li>Divide the unsorted list into <code>n</code> sublists, each containing <code>1</code> element (list of 1 element is sorted)</li>
<li>Repeatedly merge sublists to produce new sublists until there is only 1 sublist remaining</li>
</ul></li>
<li>Best, average and worst case: <code>n*log(n)</code></li>
<li>Memory: Depends; worst case is <code>n</code></li>
<li>Stable: Yes;</li>
<li>Method: Merging</li>
<li>Highly parallelizable (up to <code>O(log(n)</code>)

<ul>
<li>using the Three Hungarian's Algorithm</li>
</ul></li>
<li><a href="http://en.wikipedia.org/wiki/Merge_sort">http://en.wikipedia.org/wiki/Merge_sort</a></li>
</ul>

<p><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/mergesort.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/mergesort.png" style="max-width:100%;"></a></p>





<ul>
<li>Pseudocode</li>
</ul>

<div class="highlight highlight-source-cs"><pre>function merge_sort(list m)
    <span class="pl-c">// if list size is 0 (empty) or 1, consider it sorted</span>
    <span class="pl-c">// (using less than or equal prevents infinite recursion</span>
    <span class="pl-c">// for a zero length m)</span>
  <span class="pl-k">if</span> length(m) &lt;= <span class="pl-c1">1</span>
      <span class="pl-k">return</span> m
    <span class="pl-c">// else list size is &gt; 1, so split the list into two sublists</span>
  <span class="pl-k">var</span> list left, right
  <span class="pl-k">var</span> integer middle = length(m) / <span class="pl-c1">2</span>
  <span class="pl-k">for</span> each x <span class="pl-k">in</span> m before middle
       <span class="pl-k">add</span> x to left
  <span class="pl-k">for</span> each x <span class="pl-k">in</span> m after or equal middle
       <span class="pl-k">add</span> x to right
    <span class="pl-c">// recursively call merge_sort() to further split each sublist</span>
    <span class="pl-c">// until sublist size is 1</span>
  left = merge_sort(left)
  right = merge_sort(right)
    <span class="pl-c">// merge the sublists returned from prior calls to merge_sort()</span>
    <span class="pl-c">// and return the resulting merged sublist</span>
  <span class="pl-k">return</span> merge(left, right)</pre></div>





<div class="highlight highlight-source-cs"><pre>function merge(left, right)
    <span class="pl-k">var</span> list result
    <span class="pl-k">while</span> length(left) &gt; <span class="pl-c1">0</span> or length(right) &gt; <span class="pl-c1">0</span>
        <span class="pl-k">if</span> length(left) &gt; <span class="pl-c1">0</span> and length(right) &gt; <span class="pl-c1">0</span>
            <span class="pl-k">if</span> first(left) &lt;= first(right)
                append first(left) to result
                left = rest(left)
            <span class="pl-k">else</span>
                append first(right) to result
                right = rest(right)
        <span class="pl-k">else</span> <span class="pl-k">if</span> length(left) &gt; <span class="pl-c1">0</span>
            append first(left) to result
            left = rest(left)
        <span class="pl-k">else</span> <span class="pl-k">if</span> length(right) &gt; <span class="pl-c1">0</span>
            append first(right) to result
            right = rest(right)
    end <span class="pl-k">while</span>
    <span class="pl-k">return</span> result</pre></div>













<h1><a id="user-content-heap" class="anchor" href="#heap" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-heap"></a>Heap</h1>

<ul>
<li>Specialized tree-based data structure that satisfies the heap property:

<ul>
<li>Parent nodes are always greater (less) than or equal to the children

<ul>
<li>No implied ordering between siblings or cousins</li>
</ul></li>
</ul></li>
</ul>

<p><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/heap.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/heap.png" style="max-width:100%;"></a></p>

<ul>
<li><a href="https://en.wikipedia.org/wiki/Heap_data_structure">https://en.wikipedia.org/wiki/Heap_data_structure</a>
<a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/heap-tree.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/heap-tree.png" style="max-width:100%;"></a></li>
</ul>





<ul>
<li>Can be divided into two parts

<ul>
<li>In the first step, a heap is built out of the data</li>
<li>A sorted array is created by repeatedly removing the top element from the heap</li>
</ul></li>
<li>Best, average and worst case: <code>n*log(n)</code></li>
<li>Memory: Constant - <code>O(1)</code></li>
<li>Stable: No</li>
<li>Method: Selection</li>
<li><a href="http://en.wikipedia.org/wiki/Heapsort">http://en.wikipedia.org/wiki/Heapsort</a></li>
</ul>













<h1><a id="user-content-counting-sort" class="anchor" href="#counting-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-counting"></a>Counting sort</h1>

<ul>
<li>Algorithm for sorting a collection of objects according to keys that are small integers

<ul>
<li>Or big integers and a <code>map</code></li>
</ul></li>
<li>Not a comparison sort</li>
<li>Average case: <code>n + r</code></li>
<li>Worst case: <code>n + r</code>

<ul>
<li><code>r</code> is the range of numbers to be sorted</li>
</ul></li>
<li>Stable: Yes</li>
<li>Memory: <code>n + r</code></li>
<li><a href="http://en.wikipedia.org/wiki/Counting_sort">http://en.wikipedia.org/wiki/Counting_sort</a>
<a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/counting-sort.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/counting-sort.png" style="max-width:100%;"></a></li>
</ul>













<h1><a id="user-content-bucket-sort" class="anchor" href="#bucket-sort" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-bucket"></a>Bucket sort</h1>

<ul>
<li>Partitioning an array into a number of buckets

<ul>
<li>Each bucket is then sorted individually</li>
</ul></li>
<li>Not a comparison sort</li>
<li>Average case: <code>n + k</code>

<ul>
<li><code>k</code> = the number of buckets</li>
</ul></li>
<li>Worst case: <code>n2 * k</code></li>
<li>Stable: Yes</li>
<li>Memory: <code>n * k</code></li>
<li><a href="http://en.wikipedia.org/wiki/Bucket_sort">http://en.wikipedia.org/wiki/Bucket_sort</a></li>
</ul>

<p><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/imgs/bucket-sort.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/05.%20Sorting-Algorithms/imgs/bucket-sort.png" style="max-width:100%;"></a></p>













<h1><a id="user-content-comparison-of-sorting-algorithms" class="anchor" href="#comparison-of-sorting-algorithms" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Comparison of Sorting Algorithms</h1>

<ul>
<li>There are hundreds of sorting algorithms

<ul>
<li>Some of them are:</li>
</ul></li>
</ul>

<table><thead>
<tr>
<th align="left">Name</th>
<th align="left">Best</th>
<th align="left">Avg</th>
<th align="left">Worst</th>
<th align="left">Memory</th>
<th align="left">Stable</th>
</tr>
</thead><tbody>
<tr>
<td align="left">Bubble</td>
<td align="left">n</td>
<td align="left">n<sup>2</sup></td>
<td align="left">n<sup>2</sup></td>
<td align="left">1</td>
<td align="left">Yes</td>
</tr>
<tr>
<td align="left">Insertion</td>
<td align="left">n</td>
<td align="left">n<sup>2</sup></td>
<td align="left">n<sup>2</sup></td>
<td align="left">1</td>
<td align="left">Yes</td>
</tr>
<tr>
<td align="left">Quick</td>
<td align="left">n*log(n)</td>
<td align="left">n*log(n)</td>
<td align="left">n<sup>2</sup></td>
<td align="left">log(n)</td>
<td align="left">Depends</td>
</tr>
<tr>
<td align="left">Merge</td>
<td align="left">n*log(n)</td>
<td align="left">n*log(n)</td>
<td align="left">n*log(n)</td>
<td align="left">n</td>
<td align="left">Yes</td>
</tr>
<tr>
<td align="left">Heap</td>
<td align="left">n*log(n)</td>
<td align="left">n*log(n)</td>
<td align="left">n*log(n)</td>
<td align="left">n</td>
<td align="left">No</td>
</tr>
<tr>
<td align="left">Bogo</td>
<td align="left">n</td>
<td align="left">n*n!</td>
<td align="left">n*n!</td>
<td align="left">1</td>
<td align="left">No</td>
</tr>
</tbody></table>









<h1><a id="user-content-free-trainings--telerik-academy" class="anchor" href="#free-trainings--telerik-academy" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Free Trainings @ Telerik Academy</h1>

<ul>
<li>C# Programming @ Telerik Academy

<ul>
<li><a href="http://academy.telerik.com/student-courses/programming/data-structures-algorithms/about">Data Structures and Algorithms</a></li>
<li>Telerik Software Academy

<ul>
<li><a href="https://telerikacademy.com">telerikacademy.com</a></li>
</ul></li>
<li>Telerik Academy @ Facebook

<ul>
<li><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/facebook.com/TelerikAcademy">facebook.com/TelerikAcademy</a></li>
</ul></li>
<li>Telerik Software Academy Forums

<ul>
<li><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/05.%20Sorting-Algorithms/forums.academy.telerik.com">forums.academy.telerik.com</a></li>
</ul></li>
</ul></li>
</ul>
</article>