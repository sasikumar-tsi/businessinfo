This program downloads up to date new business registrations through a bash 
script, which then compiles and calls a parser writeen in C++. The parser
has not been finished. 

TO RUN THE DEMO:
In a linux enviornment (Windows Subsystem For Linux WIll also work), navigate
into the directory of the folder, and type ./BusinessInfo. This will lauch the shell script, which will download the files from the start date 
hard coded in the shell script. This can be changes by simply editing the file
BusinessInfo in a text editor.

Then the shell script automatically compiles and calls a.out, which parses the output to only include items of the 
listed zip codes. It currently prints to the screen, but a cheap hack would be to redirect it to a text file in the shell script.

The elements are deleted at the end, because this was done when the programmer was learned dynamic memory allocation.
A standard container should be used instead.
