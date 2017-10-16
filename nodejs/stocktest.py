import os
baseurl = 'https://www.bloomberg.com/markets/symbolsearch?page='
baseurl2 = '&query='
listOfAlphabets = ['a']
#['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
for i in listOfAlphabets:
	print 'wget -O output.txt ' + baseurl + '1' + baseurl2 + i
	os.system('wget -O output.txt ' + baseurl + '1' + baseurl2 + i)