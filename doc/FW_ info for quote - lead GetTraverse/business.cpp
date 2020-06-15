#include<iostream>
#include"string.h"
#include<iomanip>
#include"business.h"
using namespace std;
Business::Business(){

}

Business::Business(string line){
			COR_NUMBER = line.substr(0,12);
			COR_NAME= line.substr(12,150);
			COR_STATUS=line.substr(204,1);
			COR_FILING_TYPE= line.substr(205,15);
			COR_PRINC_ADD_1= line.substr(220,42);
			COR_PRINC_ADD_2= line.substr(262,42);
			COR_PRINC_CITY= line.substr(304,28);
			COR_PRINC_STATE= line.substr(332,2);
			COR_PRINC_ZIP= line.substr(334,5);
			COR_PRINC_COUNTRY= line.substr(343,02);
			COR_MAIL_ADD_1 = line.substr(346,42);//PIC X(42)
			COR_MAIL_ADD_2 = line.substr(388,42);	//PIC X(42)
			COR_MAIL_CITY = line.substr(430,28);	//PIC X(28)
			COR_MAIL_STATE = line.substr(458,02);	//PIC X(02)
			COR_MAIL_ZIP = line.substr(460,10);	 //PIC X(10)
			COR_MAIL_COUNTRY = line.substr(470,02);	//PIC X(02)
			COR_FILE_DATE = line.substr(472,8);	//PIC X(08
}

string Business::getZip(){
	return COR_PRINC_ZIP;
}
void Business::print(){
	cout<<"COR Number:      "<<left<<setw(50)<<COR_NUMBER<<endl;
	cout<<"COR Name:        "<<left<<setw(50)<<COR_NAME<<endl;
	cout<<"COR Status:      "<<left<<setw(50)<<COR_STATUS<<endl;
	cout<<"COR Filing Type: "<<left<<setw(50)<<COR_FILING_TYPE<<endl;
	cout<<"COR Filing Date: "<<left<<setw(50)<<COR_FILE_DATE<<endl;
	cout<<"COR Address 1:   "<<left<<setw(50)<<COR_PRINC_ADD_1  <<"MAIL Address 1:   "<<COR_MAIL_ADD_1<<endl;
	cout<<"COR Address 2:   "<<left<<setw(50)<<COR_PRINC_ADD_2  <<"MAIL Address 2:   "<<COR_MAIL_ADD_2<<endl;
	cout<<"COR City:        "<<left<<setw(50)<<COR_PRINC_CITY   <<"MAIL City:        "<<COR_MAIL_CITY<<endl;
	cout<<"COR State:       "<<left<<setw(50)<<COR_PRINC_STATE  <<"MAIL State:       "<<COR_MAIL_STATE<<endl;
	cout<<"COR Zip Code:    "<<left<<setw(50)<<COR_PRINC_ZIP    <<"MAIL Zip Code:    "<<COR_MAIL_ZIP<<endl;
	cout<<"COR Country:     "<<left<<setw(50)<<COR_PRINC_COUNTRY<<"MAIL Country:     "<<COR_MAIL_COUNTRY<<endl;
}

