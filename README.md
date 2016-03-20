sandbox-jsPdf
=============

A Symfony project created on March 20, 2016, 7:30 am.

This is a Example of how to use jsPDF to implement a pdf print and html preview.

Installation
------------

In this we use the follow JavaScript libraries: 

* [html2canvas](https://html2canvas.hertzen.com) to  take "screenshots" of  parts of webpages. 

* [jQuery](https://jquery.com)

* [jsPdf](https://parall.ax/products/jspdf)     solution for generating PDFs                  
    
Not other Bundle are required.

File to observe
---------------
    print.html.twig

Notes:
------
This solution have two implementation approaches using jsPDF.js 
    
* Direct  -> transform HTML to PDF Directly
    
* Indirect -> taken a screenshot of the webpage  (HTML to JPEG with canvas and then IMAGE to PDF)
    
About the Direct conversion, I use the original HTML that I need to convert to PDF but, the output pdf was not properly formed. 


About the Indirect conversion, The output pdf trunk the image, and the output file is too big for only one page, and take too long to be generated. 

Here's the implementation that did. It can be a good starting point for those wishing to use this solution. 
Possibly, I miss something, but since I did not get documentation about, I give up.
