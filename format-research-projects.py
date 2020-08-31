#!/usr/bin/python3

import pandas as pd
import sys

projects = pd.read_table(sys.stdin, sep=';', dtype=str)

# \\

def _expand_affiliation(akronym):
    if akronym == 'ICMT' :
        return "[St.&nbsp;P&ouml;lten University of Applied Sciences, Institute of Creative\Media/Technologies](https://www.fhstp.ac.at/icmt){: .external}, Austria"
    elif akronym == 'CDHI' :
        return "[St.&nbsp;P&ouml;lten University of Applied Sciences, Center for Digital Health Innovation](https://cdhi.fhstp.ac.at/en){: .external}, Austria"
    elif akronym == 'ISIS' :
        return "[Vienna University of Technology, Institute of Software Technology and Interactive Systems](http://www.isis.tuwien.ac.at/){: .external}, Austria"
    elif akronym == 'IKE' :
        return "[Danube University Krems, Department of Information &amp; Knowledge Engineering](http://www.donau-uni.ac.at/en/department/ike/){: .external}, Austria"
    elif akronym == 'TRC' :
        return "Krems Research Forschungsgesellschaft, Austria"
    else:
        return akronym

for index, row in projects.iterrows():
    r_time = row['StartMonth'] + ' &ndash; ' + row['EndMonth'] if  str(row['EndMonth']) != 'nan' else 'since ' + row['StartMonth']
    r_title = row['Title'] + '&mdash;' + row['Subtitle'] if  str(row['Subtitle']) != 'nan' else row['Title']

    print(f"{ r_time }")
    print(": ", end = '')

    if str(row['ImgUrl']) != 'nan':
        print(f"[![{ row['Title'] }]({ row['ImgUrl'] }){{: align='right'}}]({ row['ProjectUrl'] })")
    print(f"**{ r_title }**{{: .project}} \\\\")
    print(f"{ row['Funding'] } \\\\")
    print(f"{ _expand_affiliation(row['Affiliations']) }", end = '')
    if str(row['ProjectUrl']) != 'nan':
        print(" \\\\")
        print(f"[project webpage]({ row['ProjectUrl'] }){{: .external}}")
    else: 
        print()

    print()

