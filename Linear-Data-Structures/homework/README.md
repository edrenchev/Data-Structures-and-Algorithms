<article class="markdown-body entry-content" itemprop="text"><h2><a id="user-content-linear-data-structures-homework" class="anchor" href="#linear-data-structures-homework" aria-hidden="true"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Linear Data Structures Homework</h2>

<ol>
<li><p>Write a program that reads from the console a sequence of positive integer numbers.</p>

<ul>
<li>The sequence ends when empty line is entered.</li>
<li>Calculate and print the sum and average of the elements of the sequence.</li>
<li>Keep the sequence in <code>List&lt;int&gt;</code>.</li>
</ul></li>
<li><p>Write a program that reads N integers from the console and reverses them using a stack.</p>

<ul>
<li>Use the <code>Stack&lt;int&gt;</code> class.</li>
</ul></li>
<li><p>Write a program that reads a sequence of integers (<code>List&lt;int&gt;</code>) ending with an empty line and sorts them in an increasing order.</p></li>
<li><p>Write a method that finds the longest subsequence of equal numbers in given List and returns the result as new <code>List&lt;int&gt;</code>.</p>

<ul>
<li>Write a program to test whether the method works correctly.</li>
</ul></li>
<li><p>Write a program that removes from given sequence all negative numbers.</p></li>
<li><p>Write a program that removes from given sequence all numbers that occur odd number of times.</p>

<ul>
<li><em>Example</em>:

<ul>
<li><code>{4, 2, 2, 5, 2, 3, 2, 3, 1, 5, 2}</code> → <code>{5, 3, 3, 5}</code></li>
</ul></li>
</ul></li>
<li><p>Write a program that finds in given array of integers (all belonging to the range [0..1000]) how many times each of them occurs.</p>

<ul>
<li>Example: <code>array = {3, 4, 4, 2, 3, 3, 4, 3, 2}</code>

<ul>
<li>2 → 2 times</li>
<li>3 → 4 times</li>
<li>4 → 3 times</li>
</ul></li>
</ul></li>
<li><p>*The majorant of an array of size N is a value that occurs in it at least N/2 + 1 times.</p>

<ul>
<li>Write a program to find the majorant of given array (if exists).</li>
<li>Example:

<ul>
<li><code>{2, 2, 3, 3, 2, 3, 4, 3, 3}</code> → <code>3</code></li>
</ul></li>
</ul></li>
<li><p>We are given the following sequence:</p>

<ul>
<li><code>S1 = N;</code></li>
<li><code>S2 = S1 + 1;</code></li>
<li><code>S3 = 2*S1 + 1;</code></li>
<li><code>S4 = S1 + 2;</code></li>
<li><code>S5 = S2 + 1;</code></li>
<li><code>S6 = 2*S2 + 1;</code></li>
<li><code>S7 = S2 + 2;</code></li>
<li>...</li>
<li>Using the <code>Queue&lt;T&gt;</code> class write a program to print its first 50 members for given N.</li>
<li>Example: <code>N=2</code> → <code>2, 3, 5, 4, 4, 7, 5, 6, 11, 7, 5, 9, 6, ...</code></li>
</ul></li>
<li><p>We are given numbers N and M and the following operations:</p>

<ul>
<li><code>N = N+1</code></li>
<li><code>N = N+2</code></li>
<li><p><code>N = N*2</code></p></li>
<li><p>Write a program that finds the shortest sequence of operations from the list above that starts from <code>N</code> and finishes in <code>M</code>.</p></li>
<li><em>Hint</em>: use a queue.</li>
<li>Example: <code>N = 5</code>, <code>M = 16</code></li>
<li>Sequence: 5 → 7 → 8 → 16</li>
</ul></li>
<li><p>Implement the data structure linked list.</p>

<ul>
<li>Define a class <code>ListItem&lt;T&gt;</code> that has two fields: <code>value</code> (of type <code>T</code>) and <code>NextItem</code> (of type <code>ListItem&lt;T&gt;</code>). </li>
<li>Define additionally a class <code>LinkedList&lt;T&gt;</code> with a single field <code>FirstElement</code> (of type <code>ListItem&lt;T&gt;</code>).</li>
</ul></li>
<li><p>Implement the ADT <code>stack</code> as auto-resizable array.</p>

<ul>
<li>Resize the capacity on demand (when no space is available to add / insert a new element).</li>
</ul></li>
<li><p>Implement the ADT <code>queue</code> as dynamic linked list.</p>

<ul>
<li>Use generics (<code>LinkedQueue&lt;T&gt;</code>) to allow storing different data types in the queue.</li>
</ul></li>
<li><p>(*) We are given a labyrinth of size N x N.</p>

<ul>
<li>Some of its cells are empty (<code>0</code>) and some are full (<code>x</code>).</li>
<li>We can move from an empty cell to another empty cell if they share common wall.</li>
<li>Given a starting position (<code>*</code>) calculate and fill in the array the minimal distance from this position to any other cell in the array. Use "<code>u</code>" for all unreachable cells. </li>
<li><em>Example</em>:</li>
</ul></li>
</ol>

<p><a href="/TelerikAcademy/Data-Structures-and-Algorithms/blob/master/Topics/02.%20Linear-Data-Structures/homework/imgs/matrices.png" target="_blank"><img src="/TelerikAcademy/Data-Structures-and-Algorithms/raw/master/Topics/02.%20Linear-Data-Structures/homework/imgs/matrices.png" style="max-width:100%;"></a></p>
</article>