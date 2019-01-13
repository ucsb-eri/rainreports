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
  * DB should have some utilities to be able to bin dates up based on Y, or YM date stamps
* python,,phpphp or bash script to manually load PDFs into the sqlite DB.
* bash script to fetch daily PDFs to store in a data dir outside of the repo tree.

# Requirements
* bash (deployment/testing on 4.x)
* pdftotext (testing on on 0.26.x, future dev on 0.52.x) - (poppler-utils package for Fedora/CentOS/RedHat)
* php (deployment/testing on 7.1.x)
* sqlite (deployment/testing on 3.x)
