#include<fstream>
#include<iostream>
#include"string.h"
#include<iomanip>
using namespace std;

int main(){
	int STARTYEAR=2019;
	int STARTMONTH=8;
	int STARTDAY=1;
	ifstream file("20190802c.txt");
	if (file.is_open()){
		string line="";
		int i=0;
		while(getline(file,line)){
			if (line.size()>0){
				string COR_NUMBER = line.substr(0,12);
				string COR_NAME= line.substr(12,191);
				string COR_STATUS=line.substr(204,1);
				string COR_FILING_TYPE= line.substr(205,15);
				string COR_PRINC_ADD_1= line.substr(220,42);
				string COR_PRINC_ADD_2= line.substr(262,42);
				string COR_PRINC_CITY= line.substr(304,28);
				string COR_PRINC_STATE= line.substr(332,2);
				string COR_PRINC_ZIP= line.substr(334,10);
				string COR_PRINC_COUNTRY= line.substr(343,02);

				string COR_MAIL_ADD_1 = line.substr(346,42);//PIC X(42)
				string COR_MAIL_ADD_2 = line.substr(388,42);	//PIC X(42)
				string COR_MAIL_CITY = line.substr(430,28);	//PIC X(28)
				string COR_MAIL_STATE = line.substr(458,02);	//PIC X(02)
				string COR_MAIL_ZIP = line.substr(460,10);	 //PIC X(10)
				string COR_MAIL_COUNTRY = line.substr(470,02);	//PIC X(02)
				string COR_FILE_DATE = line.substr(472,480);	//PIC X(08)
				cout<<"COR Number:      "<<left<<setw(42)<<COR_NUMBER<<endl;
				cout<<"COR Name:        "<<left<<setw(42)<<COR_NAME<<endl;
				cout<<"COR Status:      "<<left<<setw(42)<<COR_STATUS<<endl;
				cout<<"COR Filing Type: "<<left<<setw(42)<<COR_FILING_TYPE<<endl;
				cout<<"COR Address 1:   "<<left<<setw(42)<<COR_PRINC_ADD_1  <<"MAIL Address 1:   "<<COR_MAIL_ADD_1<<endl;
				cout<<"COR Address 2:   "<<left<<setw(42)<<COR_PRINC_ADD_2  <<"MAIL Address 2:   "<<COR_MAIL_ADD_2<<endl;
				cout<<"COR City:        "<<left<<setw(42)<<COR_PRINC_CITY   <<"MAIL City:        "<<COR_MAIL_CITY<<endl;
				cout<<"COR State:       "<<left<<setw(42)<<COR_PRINC_STATE  <<"MAIL State:       "<<COR_MAIL_STATE<<endl;
				cout<<"COR Zip Code:    "<<left<<setw(42)<<COR_PRINC_ZIP    <<"MAIL Zip Code:    "<<COR_MAIL_ZIP<<endl;
				cout<<"COR Country:     "<<left<<setw(42)<<COR_PRINC_COUNTRY<<"MAIL Country:     "<<COR_MAIL_COUNTRY<<endl;
				i++;
				//if (i>10){
				//	break;
				//}
				cout<<i<<endl<<endl;
			}
		}
	}

	//CORPORATE DATA – FILE STRUCTURE
	//COR_REC
	/*	 
	for (int i=0;i<32;i++){
		
		string line;
		getline(file,line,'\0');
		if (line.size()>10){}
			cout<<i<<endl;
			cout<<line<<endl;
		string COR_NUMBER = line.substr(0,12);
		string COR_NAME= line.substr(12,192);
		string COR_STATUS=line.substr(204,1);
		string COR_FILING_TYPE= line.substr(205,15);
		//string COR_PRINC_ADD_1= line.substr();
		//string COR_PRINC_ADD_2= line.substr();
		//string COR_PRINC_CITY= line.substr();
		//string COR_PRINC_STATE= line.substr();
		//string BCOR_PRINC_ZIP= line.substr();
		//string COR_PRINC_COUNTRY= line.substr();
		cout<<"Number:      "<<COR_NUMBER<<endl;
		cout<<"Name:        "<<COR_NAME<<endl;
		cout<<"Status:      "<<COR_STATUS<<endl;
		cout<<"Filing Type: "<<COR_FILING_TYPE<<endl;
		*/
	return 0;
}
