<html>
    <head>
    <title>Employee Registration Form</title>

    </head>
    <style>
        body{
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
        }
        h3{
            font-family: Georgia, serif;
            /* font-size: 25px; */
            letter-spacing: 0.6px;
            word-spacing: 2px;
            color: #0A0044;
            font-weight: 700;
            text-decoration: none;
            font-style: italic;
            font-variant: normal;
            text-transform: none;
            /* color:SlateBlue; */
            text-align: center; 
            text-decoration: underline
            color: white;
            text-shadow: 1px -1px 0 #767676, -1px 2px 1px;
            margin-top: 25px;
            font-size: 25px;
            }
            table{ 
            color:white; 
            font-family: Georgia, serif;
            font-size: 25px;
            letter-spacing: 0.6px;
            word-spacing: 2px;
            color: #0A0044;
            font-weight: 700;
            text-decoration: none;
            font-style: italic;
            font-variant: normal;
            text-transform: none;
            /* background-color: SlateBlue;  */
            /* background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(179,9,9,1) 27%, rgba(0,212,255,1) 100%); */
            border: 10px solid rgb(2,0,36);
            /* border-image: conic-gradient(red, yellow, lime, aqua, blue, magenta, red) 1; */
            border: 25px outset #1C6EA4;
            border-radius: 40px 38px 40px 0px;
            color: white;}
            }
            border-collapse: collapse; 
            border: 2px solid navy
            }
            table.inner{
            border: 0px
            }
            button{
                background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
                width: 90px;
            }
            
}
    </style>
 
<body>
<h3 style>EMPLOYEE REGISTRATION FORM</h3>

 
<table align="center" cellpadding = "10">
 
<tr>
<td>Employee ID</td>
<td><input type="text" name="Employee_ID" maxlength="30"/>

</td>
</tr>
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>

</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>

</td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
</td>
</tr>
<tr>
<td>CNIC</td>
<td><input type="text" name="CNIC" maxlength="30"/>
</tr>
<tr>
<td>JOINING DATE</td>
<td><input type="date" name="joinin date" maxlength="30"/>
</td>
</tr>
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
<tr>
    <td>
    <button type="button">Submit</button><button type="button">Reset</button>
    </td>
</tr>
</table>
 
</form>
 
</body>
</html>