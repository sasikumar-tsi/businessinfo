//Copyright Chris Johnson, 2019
#include<iostream>
#include<fstream>
#include"business.h"
using namespace std;

class BusinessList{
	public:
	BusinessList();
	~BusinessList();
	bool inFile(string name);
	bool exportFile();
	bool importAll();
	bool exportZips();

	void grow();

	private:
	int size;
	Business ** list;
	Business * a;
	string * zips;
};