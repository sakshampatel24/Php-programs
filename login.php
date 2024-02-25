<!DOCTYPE html> 
<html> 

<head> 
    <title>Login Form</title> 
    <link rel="stylesheet"
        href="style.css"> 
</head> 

<body> 
    <div class="main">
        <div class="transparent-border"></div> 
    <h1>Student Registration</h1>
    <div class="wrap"> 
       
<br>
                <button type="submit"
                        onclick="solve()"> 
                    Login
                </button> 
            </div> 
        <form action=""> 
        <label for="first"> 
                Name
            </label> 
            <input type="text"
                id="first"
                name="first"
                placeholder="Enter your Name" required> 
            <label for="first"> 
                Username: 
            </label> 
            <input type="text"
                id="first"
                name="first"
                placeholder="Enter your Username" required> 

            <label for="password"> 
                Password: 
            </label> 
            <input type="password"
                id="password"
                name="password"
                placeholder="Enter your Password" required> 
            
                <label for="Gender">Gender:</label>

                <select name="Gender" id="Gender">
                <option value="BSC">Male</option>
                <option value="BCA">Frmale</option>
                <option value="BCA">Other</option>
                
                </select>

            <label for="cars">Stream:</label>

                <select name="strean" id="stream">
                <option value="BSC">BSC</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                <option value="MSC IT">MSC IT</option>
                </select>

                <label for="cars">Semester:</label>

                <select name="Semester" id="Semester">
                <option value="BSC">1</option>
                <option value="BCA">2</option>
                <option value="MCA">3</option>
                <option value="MSC IT">4</option>
                </select>

                <div class="wrap1"> 
                <button type="submit"
                        onclick="solve()"> 
                    Submit
                </button> 
            </div> 

            
        </form> 
        
    </div> 
</body> 

</html>