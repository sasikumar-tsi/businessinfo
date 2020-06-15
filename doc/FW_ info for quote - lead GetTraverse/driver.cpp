#include<iostream>
#include<string.h>
#include"businessList.h"
using namespace std;

int main(){
	string ex ="20190802c.txt";
	BusinessList example;
	cout<<"1";
	int nyear=2019;
	int nmonth=8;
	int nday=10;
		
	time_t now = time(0);

	tm *ltm = localtime(&now);

	nyear = ltm->tm_year +1900;
	nmonth = ltm->tm_mon +1;
	nday = ltm->tm_mday;
	int y=2019;
	int m=8;
	int d=10;
	bool running = true;
	while (running){
		if (d>31){
			m++;
			d=1;
		}
		if (m>12){
			y++;
			m=1;
		}
		if ((nyear==y)&&(nmonth==m)&&((nday+1)==d)){
			running=false;
			break;
		}
		//cout<<y<<' '<<m<<' '<<d<<endl;
		string year = to_string(y);
		string mo = to_string(m);
		string month;
		if (m<10)
			month = "0" + mo;
		else
			month = mo;
		string day;
		string da = to_string(d);
		if (d<10)
			day = "0" + da;
		else
			day = da;
		string FILENAME = year + month + day + "c.txt";
		cout<<FILENAME<<endl;
		example.inFile(FILENAME);
		d++;
	}
	//example.inFile(ex);
	cout<<"Here"<<endl;
	return 0;
}