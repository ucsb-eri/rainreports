# rainreports
Code to deal with SB County Rainfall reports

# Background
This all started off as a stupid little personal project.
Just a single bash script that uses wget or curl to fetch the daily PDF from the URL:
```
  http://www.countyofsb.org/uploadedFiles/pwd/Content/Water/Documents/rainfallreport.pdf
```
Have decided there might be some reasons to actually expand this.

# Goal
Have a couple goals with the expanded approach here:
* Create a website to make the various daily PDFs available
* Compress the PDF's and store in a sqlite DB
* python or bash script to manually load PDFs into the sqlite DB.
* bash script to fetch daily PDFs to store in a data dir outside of the repo tree.

# Requirements
* bash (deployment/testing on 4.x)
* pdftotext 
* php (deployment/testing on 7.1.x)
* sqlite (deployment/testing on 3.x)
