<div id="readme" class="readme boxed-group clearfix announce instapaper_body md">
    <h3>
      <svg aria-hidden="true" class="octicon octicon-book" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path></svg>
      README.md
    </h3>

      <article class="markdown-body entry-content" itemprop="text">



<h1><a id="user-content-searching-algorithms" class="anchor" href="#searching-algorithms" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Searching Algorithms</h1>

<div>
    <p>Data Structures and Algorithms</p>
    <p>Telerik Software Academy</p>
    <a href="http://academy.telerik.com">http://academy.telerik.com</a>
</div>





<h1><a id="user-content-table-of-contents" class="anchor" href="#table-of-contents" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Table of Contents</h1>

<ul>
<li><a href="#searchingAlgorithms">Searching</a>

<ul>
<li><a href="#linear">Linear search</a></li>
<li><a href="#binary">Binary search</a></li>
<li><a href="#interpolation">Interpolation search</a></li>
</ul></li>
<li><a href="#shufflingAlgorithm">Shuffling</a></li>
</ul>









<h1><a id="user-content-search-algorithm" class="anchor" href="#search-algorithm" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-searchingAlgorithms"></a>Search Algorithm</h1>

<ul>
<li>An algorithm for finding an item with specified properties among a collection of items</li>
<li>Different types of searching algorithms

<ul>
<li>For virtual search spaces

<ul>
<li>satisfy specific mathematical equations</li>
<li>try to exploit partial knowledge about structure</li>
</ul></li>
<li>For sub-structures of a given structure

<ul>
<li>graph, a string, a finite group</li>
</ul></li>
<li>Search for the max (min) of a function</li>
<li>etc.</li>
</ul></li>
</ul>



<h1><a id="user-content-linear-search" class="anchor" href="#linear-search" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-linear"></a>Linear Search</h1>

<ul>
<li>Method for finding a particular value in a list

<ul>
<li>Checking every one of the elements</li>
<li>One at a time in sequence</li>
<li>Until the desired one is found</li>
</ul></li>
<li>Worst and average performance: <code>O(n)</code></li>
</ul>

<div class="highlight highlight-source-cs"><pre> <span class="pl-k">for</span> each item <span class="pl-k">in</span> the list:
     <span class="pl-k">if</span> that item has the desired <span class="pl-k">value</span>,
         stop the search and <span class="pl-k">return</span> the location.
 <span class="pl-k">return</span> nothing.</pre></div>









<h1><a id="user-content-binary-search" class="anchor" href="#binary-search" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-binary"></a>Binary Search</h1>

<ul>
<li>Finds the position of a specified value within an <strong>ordered</strong> data structure</li>
<li>In each step, compare the input with the middle

<ul>
<li>The algorithm repeats its action to the left or right sub-structure</li>
</ul></li>
<li>Average performance: <code>O(log(n))</code></li>
</ul>





<ul>
<li><em>Example:</em> Recursive binary search</li>
</ul>

<div class="highlight highlight-source-cs"><pre>function binarySearch(<span class="pl-k">int</span> items[],<span class="pl-k">int</span> key,<span class="pl-k">int</span> <span class="pl-k">from</span>,<span class="pl-k">int</span> to)
  <span class="pl-k">if</span> (to &lt; <span class="pl-k">from</span>):
    <span class="pl-c">// set is empty, so return value showing not found</span>
    <span class="pl-k">return</span> KEY_NOT_FOUND;
  <span class="pl-c">// calculate midpoint to cut set in half</span>
  <span class="pl-k">int</span> middle = midpoint(<span class="pl-k">from</span>, to);
  <span class="pl-k">if</span> (a[middle] &gt; key):
    <span class="pl-c">// key is in lower subset</span>
    <span class="pl-k">return</span> binarySearch(a, key, <span class="pl-k">from</span>, middle - <span class="pl-c1">1</span>);
  <span class="pl-k">else</span> <span class="pl-k">if</span> (a[middle] &lt; key):
    <span class="pl-c">// key is in upper subset</span>
    <span class="pl-k">return</span> binarySearch(a, key, middle + <span class="pl-c1">1</span>, to);
  <span class="pl-k">else</span>:
    <span class="pl-c">// key has been found</span>
    <span class="pl-k">return</span> middle;</pre></div>





<ul>
<li><em>Example:</em> Iterative binary search</li>
</ul>

<div class="highlight highlight-source-cs"><pre><span class="pl-k">int</span> binarySearch(<span class="pl-k">int</span> a[], <span class="pl-k">int</span> key, <span class="pl-k">int</span> <span class="pl-k">from</span>, <span class="pl-k">int</span> to)
  <span class="pl-c">// continue searching while [imin,imax] is not empty</span>
  <span class="pl-k">while</span> (<span class="pl-k">from</span> &lt;= to):
    <span class="pl-c">//calculate the midpoint for roughly equal partition x/</span>
    <span class="pl-k">int</span> middle = midpoint(<span class="pl-k">from</span>, to);
    <span class="pl-c">// determine which subarray to search</span>
    <span class="pl-k">if</span> (a[middle] &lt; key)
      <span class="pl-c">// change from index to search upper subarray</span>
       <span class="pl-k">from</span> = middle + <span class="pl-c1">1</span>;
    <span class="pl-k">else</span> <span class="pl-k">if</span> (a[middle] &gt; key)
      <span class="pl-c">// change to index to search lower subarray</span>
       to = middle - <span class="pl-c1">1</span>
    <span class="pl-k">else</span>
      <span class="pl-c">// key found at index middle</span>
      <span class="pl-k">return</span> middle;
  <span class="pl-k">return</span> KEY_NOT_FOUND;</pre></div>









<h1><a id="user-content-interpolation-search" class="anchor" href="#interpolation-search" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-interpolation"></a>Interpolation Search</h1>

<ul>
<li>An algorithm for searching for a given key value in an indexed array that has been ordered by the values of the key

<ul>
<li>Parallels how humans search through a telephone book</li>
<li>Calculates where in the remaining search space the sought item might be

<ul>
<li>Binary search always chooses the middle element</li>
</ul></li>
</ul></li>
<li>Average case: <code>log(log(n))</code>, Worst case: <code>O(n)</code></li>
<li><a href="http://youtube.com/watch?v=l1ed_bTv7Hw">http://youtube.com/watch?v=l1ed_bTv7Hw</a></li>
</ul>





<ul>
<li>Sample Implementation</li>
</ul>

<div class="highlight highlight-source-cs"><pre><span class="pl-k">public</span> <span class="pl-k">int</span> InterpolationSearch(<span class="pl-k">int</span>[] sortedArray, <span class="pl-k">int</span> toFind){
  <span class="pl-c">// Returns index of toFind in sortedArray, or -1 if not found</span>
  <span class="pl-k">int</span> low = <span class="pl-c1">0</span>;
  <span class="pl-k">int</span> high = sortedArray.length - <span class="pl-c1">1</span>;
  <span class="pl-k">int</span> mid;
  <span class="pl-k">while</span>(sortedArray[low] &lt;= toFind &amp;&amp; sortedArray[high] &gt;= toFind) {
    mid = low + ((toFind - sortedArray[low]) x (high - low)) /
                (sortedArray[high] - sortedArray[low]);
                <span class="pl-c">// out of range   is possible here</span>
    <span class="pl-k">if</span> (sortedArray[mid] &lt; toFind)
      low = mid + <span class="pl-c1">1</span>;
    <span class="pl-k">else</span> <span class="pl-k">if</span> (sortedArray[mid] &gt; toFind)
      high = mid - <span class="pl-c1">1</span>;
    <span class="pl-k">else</span>
      <span class="pl-k">return</span> mid;
  }
  <span class="pl-k">if</span> (sortedArray[low] == toFind) <span class="pl-k">return</span> low;
    <span class="pl-k">else</span> <span class="pl-k">return</span> -<span class="pl-c1">1</span>; <span class="pl-c">// Not found</span>
}</pre></div>









<h1><a id="user-content-shuffling" class="anchor" href="#shuffling" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><a id="user-content-shufflingAlgorithm"></a>Shuffling</h1>

<ul>
<li>A procedure used to randomize the order of items in a collection

<ul>
<li>Generating random permutation</li>
</ul></li>
<li><a href="http://en.wikipedia.org/wiki/Shuffling">http://en.wikipedia.org/wiki/Shuffling</a></li>
</ul>



<h1><a id="user-content-fisher-yates-shuffle-algorithm" class="anchor" href="#fisher-yates-shuffle-algorithm" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Fisher-Yates shuffle algorithm</h1>

<div class="highlight highlight-source-cs"><pre><span class="pl-k">public</span> <span class="pl-k">static</span> IEnumerable&lt;T&gt; Shuffle&lt;T&gt;(<span class="pl-c1">this</span> IEnumerable&lt;T&gt; source)
{
    <span class="pl-k">var</span> array = source.ToArray();
    <span class="pl-k">var</span> n = array.Length;
    <span class="pl-k">for</span> (<span class="pl-k">var</span> i = <span class="pl-c1">0</span>; i &lt; n; i++)
    {
        <span class="pl-c">// Exchange a[i] with random element in a[i..n-1]</span>
        <span class="pl-k">int</span> r = i + RandomProvider.Instance.Next(<span class="pl-c1">0</span>, n - i);
        <span class="pl-k">var</span> temp = array[i];
        array[i] = array[r];
        array[r] = temp;
    }
    <span class="pl-k">return</span> array;
}
<span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">class</span> <span class="pl-en">RandomProvider</span>
{
    <span class="pl-k">private</span> <span class="pl-k">static</span> Random Instance = <span class="pl-k">new</span> Random();
}</pre></div>









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
<li><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/06.%20Searching-Algorithms/facebook.com/TelerikAcademy">facebook.com/TelerikAcademy</a></li>
</ul></li>
<li>Telerik Software Academy Forums

<ul>
<li><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/06.%20Searching-Algorithms/forums.academy.telerik.com">forums.academy.telerik.com</a></li>
</ul></li>
</ul></li>
</ul>
</article>
  </div>