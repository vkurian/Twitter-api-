#pip install openpyxl
#using the blob file

#defined df to the pandas dataframe to the table final_dataset that was in the blob file.
df =pd.DataFrame(final_dataset)

conditions=[
    (df['compound']==0),
    (df['compound']>0),
    (df['compound']<0),
]
values=["neutral",'positive','negative']
#creates a list connected to the conditions indicated above to either neutral, postive or negative
df["Sentiment"]=np.select(conditions,values) 
df.head()


#you will need to make a folder on your C: drive named tempfolder or just change the line of code to your desired location
#to excel file
df.to_csv("C:\\tempfolder\\export.csv",index=False)


#to txt file 
df.to_csv("C:\\tempfolder\\export.txt",index=False,sep="\t")
