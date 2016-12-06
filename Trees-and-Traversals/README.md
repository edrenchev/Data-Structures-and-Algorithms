<article class="markdown-body entry-content" itemprop="text"><ol>
<li><p>You are given a <strong>tree of N nodes</strong> represented as a set of <code>N-1</code> pairs of nodes (parent node, child node), each in the range (<code>0..N-1</code>).
Example:</p>

<p><a href="/images/Problem1_Tree.png" target="_blank"><img src="images/Problem1_Tree.png" alt="Tree" style="max-width:100%;"></a></p>

<p>Write a program to read the tree and find:</p>

<ol type="a">
   <li>the root node</li>
   <li>all leaf nodes</li>
   <li>all middle nodes</li>
   <li>the longest path in the tree</li>
   <li>(*) all paths in the tree with given sum `S` of their nodes</li>
   <li>(*) all subtrees with given sum `S` of their nodes</li>
</ol></li>
<li><p>Write a program to traverse the directory <code>C:\WINDOWS</code> and all its subdirectories recursively and to display all files matching the mask <code>*.exe</code>. Use the class <code>System.IO.Directory</code>.</p></li>
<li><p>Define classes <code>File { string name, int size }</code> and <code>Folder { string name, File[] files, Folder[] childFolders }</code> and using them build a tree keeping all files and folders on the hard drive starting from <code>C:\WINDOWS</code>. Implement a method that calculates the sum of the file sizes in given subtree of the tree and test it accordingly. Use recursive DFS traversal.</p></li>
</ol>
</article>