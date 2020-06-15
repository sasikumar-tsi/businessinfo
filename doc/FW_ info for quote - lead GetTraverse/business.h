//Copyright Chris Johnson, 2019
#include<iostream>
using namespace std;

class Business{
	
	public:
	Business();
	Business(string line);
	void print();

	string getZip();

	private:
 	string COR_NUMBER;	
 	string COR_NAME;	
 	string COR_STATUS;
	string COR_FILING_TYPE;	
	string COR_PRINC_ADD_1;
	string COR_PRINC_ADD_2;
	string COR_PRINC_CITY;	
	string COR_PRINC_STATE;	
	string COR_PRINC_ZIP;
	string COR_PRINC_COUNTRY;
	string COR_MAIL_ADD_1;
	string COR_MAIL_ADD_2;
	string COR_MAIL_CITY;
	string COR_MAIL_STATE;
	string COR_MAIL_ZIP;
	string COR_MAIL_COUNTRY;
	string COR_FILE_DATE;
};