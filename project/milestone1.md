<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Jasmit Bawa (jb756)</td></tr>
<tr><td> <em>Generated: </em> 11/20/2023 8:50:53 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone1-deliverable/grade/jb756" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.28.31image.png.webp?alt=media&token=3f11c73f-500b-49a6-8d59-08b9c4670fd0"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the wrong email format was submitted<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.29.53image.png.webp?alt=media&token=177441cd-73c2-495c-982d-d809be101c2d"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows that the password is too short<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.30.52image.png.webp?alt=media&token=98608154-3e10-4315-8576-ef49d9af687b"/></td></tr>
<tr><td> <em>Caption:</em> <p>passwords don&#39;t match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.31.21image.png.webp?alt=media&token=a694f3d7-d16e-4dd5-abb3-d7349a2afcdd"/></td></tr>
<tr><td> <em>Caption:</em> <p>the email is already in use<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.32.04image.png.webp?alt=media&token=dc8dd372-1df4-46dc-9f79-392429aa8fa1"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already in use<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.35.07image.png.webp?alt=media&token=cf4fea40-747b-4645-a905-5bfdcc8f698f"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is a brand new user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.36.28image.png.webp?alt=media&token=f4282d89-7b49-4336-b17a-3474adf52c89"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows all of the registrations of users in this image and the one<br>from from task 1 is on row 5<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/33">https://github.com/jasmitsbawa/jb756-it202-007/pull/33</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form uses many different files to run the registration one being the<br>SQL file for the users table. This is where the verification for registration<br>is done and where you can keep track of who has joined. The<br>validation on the frontend uses regex to make sure the email is correctly<br>formatted and the password is at least 8 characters long. On the backend<br>the code compares the information proved to the users table to make sure<br>that the back and front end is correct in order to register a<br>new user. Meaning they provide brand new information for the email and username.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.52.07image.png.webp?alt=media&token=12b5aefd-4434-4576-907f-0357ea9ad7d8"/></td></tr>
<tr><td> <em>Caption:</em> <p>the password is not the same as compared to the database<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.52.54image.png.webp?alt=media&token=9e3e40d9-4b05-4ad2-861d-a460441fa55f"/></td></tr>
<tr><td> <em>Caption:</em> <p>random non-existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T17.53.27image.png.webp?alt=media&token=93df2a0b-3273-4d5d-a59c-a74345bbe305"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows a welcome message for an existing user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/34">https://github.com/jasmitsbawa/jb756-it202-007/pull/34</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/40">https://github.com/jasmitsbawa/jb756-it202-007/pull/40</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>When on the login page the user enters their information that they used<br>for registration. The submission then compares the request with the users table and<br>sees if the email/username&nbsp; and password entered are correct. The password is hashed<br>to encrypt the password with salt and then is decrypted when comparing.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T18.04.36image.png.webp?alt=media&token=244ef3c2-3a7f-4539-aab1-57c875cb507f"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the user has successfully logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T18.05.13image.png.webp?alt=media&token=fceeba28-93b1-4056-9f91-7155bf7e8123"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the user trying to access the profile page while being logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/34/files">https://github.com/jasmitsbawa/jb756-it202-007/pull/34/files</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/36/files">https://github.com/jasmitsbawa/jb756-it202-007/pull/36/files</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>While the user is logged in it has its corresponding permissions to view<br>certain pages. When the user logs out the session is restarted, a flash<br>message appears saying &quot;Successfully logged out&quot;&nbsp; and redirects the user back to the<br>login page.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T18.57.34image.png.webp?alt=media&token=7665cc07-ae7e-4501-93da-56d2e11f6dc4"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the user trying to access the profile page while being logged out<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.06.47image.png.webp?alt=media&token=067853f3-4172-4678-9321-2774b03d051e"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the user trying to access an admin page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.08.21image.png.webp?alt=media&token=b905693a-c08c-4587-a637-e0941fef26dd"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.15.08image.png.webp?alt=media&token=95fcc2a2-021c-46b8-93a3-72e9fa5ac491"/></td></tr>
<tr><td> <em>Caption:</em> <p>userroles table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/39">https://github.com/jasmitsbawa/jb756-it202-007/pull/39</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>When the user is logged out there is no session running, meaning that<br>the pages you would access while the session is running are blocked.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>Specific users can have different roles, and if a person has the role<br>of the admin they have that permission from the backend. If the person<br>doesn&#39;t have those permissions they will not be able look at the role-protected<br>pages since they do not have that permission.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.23.22image.png.webp?alt=media&token=befd21d5-8ec7-418e-86cf-32e52136f5ae"/></td></tr>
<tr><td> <em>Caption:</em> <p>the style of the UI<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.24.22image.png.webp?alt=media&token=e01395ff-175d-41fc-89fe-670d0aa82991"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the styles.css file<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T22.40.01image.png.webp?alt=media&token=49d11602-3db7-44b8-bcaa-2870b47abf0e"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows the table style<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/38">https://github.com/jasmitsbawa/jb756-it202-007/pull/38</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/41">https://github.com/jasmitsbawa/jb756-it202-007/pull/41</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/45">https://github.com/jasmitsbawa/jb756-it202-007/pull/45</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>For the styling portion I took my time to find some colors that<br>seemed nice, I like more earth tone colors so that&#39;s wat I used<br>for everything. I also used the proper tags to make sure certain Items<br>had different styles. For the table I wanted to keep the same theme<br>so I used the colors I used previously.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.25.20image.png.webp?alt=media&token=6430b283-c4d5-4449-9c18-f9aa60d47e3b"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows a flash message saying you must be logged in to view this<br>page<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.27.02image.png.webp?alt=media&token=6a9a7eaf-600e-485f-b75f-b207b44fee27"/></td></tr>
<tr><td> <em>Caption:</em> <p>lets the user know that the email was not found in the database<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.28.14image.png.webp?alt=media&token=7cc25427-7165-4959-86b1-6967a315a415"/></td></tr>
<tr><td> <em>Caption:</em> <p>message saying that the user has been logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/36">https://github.com/jasmitsbawa/jb756-it202-007/pull/36</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p><b>For the technical messages we have taken precautions&nbsp;on what a user can input<br>and we have caught those errors and returned them back to the user<br>in a user friendly way. The messages let the user know exactly where<br>they are going wrong so they can fix their mistake.</b><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T19.33.42image.png.webp?alt=media&token=e6b7eddf-47e0-43ad-9fde-bc16bba971c5"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the email and username are already filled in and is showing the<br>user that they can change their password here<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/38">https://github.com/jasmitsbawa/jb756-it202-007/pull/38</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/37">https://github.com/jasmitsbawa/jb756-it202-007/pull/37</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>Once a user starts a session, it remembers what the users has input<br>in to the form and retrieves its data form the table. Once the<br>user is on the profile page it knows who is logged in and<br>displays their username and email accordingly.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.50.53image.png.webp?alt=media&token=e317e7b6-39dd-42fa-81e8-f4d7391af4a6"/></td></tr>
<tr><td> <em>Caption:</em> <p>email validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.51.41image.png.webp?alt=media&token=90623073-28b1-436a-96b4-dff3ad4bdd4b"/></td></tr>
<tr><td> <em>Caption:</em> <p>username validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.52.21image.png.webp?alt=media&token=f32d5a56-531f-4236-a4ba-29d764d14cc1"/></td></tr>
<tr><td> <em>Caption:</em> <p>password validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.53.39image.png.webp?alt=media&token=7884cfca-762a-4e40-bdaf-14124de42830"/></td></tr>
<tr><td> <em>Caption:</em> <p>password not matching validation <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.55.06image.png.webp?alt=media&token=625644d7-b04f-4c54-b642-5d94f7428feb"/></td></tr>
<tr><td> <em>Caption:</em> <p>email already in use<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.55.37image.png.webp?alt=media&token=72541011-a51c-4961-8978-8bbed2d055a3"/></td></tr>
<tr><td> <em>Caption:</em> <p>username already in use<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.56.45image.png.webp?alt=media&token=1a9df2c5-5bdd-4071-8042-f9a05a2dfa2d"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the screenshot before updating the table, I will be updating row<br>5 email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-20T20.58.45image.png.webp?alt=media&token=111d2b5c-301d-42d5-bca7-87abdf471ae3"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the screenshot after updating the table, I will be updating row<br>5 email<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/41">https://github.com/jasmitsbawa/jb756-it202-007/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>The commit I included at the bottom of this is a better representation<br>of the code that I have the pull request above I messed up<br>and merged to prod. It still includes the initial validation I had coded<br>but the commit at the bottom is the final. On the backend the<br>code is checking the format for email, password, and username. The validation was<br>deployed by first creating some custom helper functions and then using them to<br>verify in the login, register,&nbsp; profile php codes. It first checks if the<br>space is empty and goes through the rest of the validations. Although for<br>login we need to check for username and email at the same time.&nbsp;<div><br><a href="https://github.com/jasmitsbawa/jb756-it202-007/commit/49014e78547247e1e1f636f47a4a1c4d2ce56866">https://github.com/jasmitsbawa/jb756-it202-007/commit/49014e78547247e1e1f636f47a4a1c4d2ce56866</a></div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-11-21T01.15.26image.png.webp?alt=media&token=7f36af3c-561d-4cc4-a00b-a1b89a55d76d"/></td></tr>
<tr><td> <em>Caption:</em> <p>issues for milestone one<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/jasmitsbawa/projects/1/views/1">https://github.com/users/jasmitsbawa/projects/1/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/register.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/register.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone1-deliverable/grade/jb756" target="_blank">Grading</a></td></tr></table>