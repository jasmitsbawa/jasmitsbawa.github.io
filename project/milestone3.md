<table><tr><td> <em>Assignment: </em> IT202 Milestone 3 API Project</td></tr>
<tr><td> <em>Student: </em> Jasmit Bawa (jb756)</td></tr>
<tr><td> <em>Generated: </em> 12/14/2023 10:53:50 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-3-api-project/grade/jb756" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone3 branch</li><li>Create a new markdown file called milestone3.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone3.md</li><li>Add/commit/push the changes to Milestone3</li><li>PR Milestone3 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes just to be up to date</li><li>Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> API Data Association </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Consider how your API data will be associated with a user</td></tr>
<tr><td> <em>Response:</em> <p>With using my API I plan on using the terms provided to me<br>through Urban Dictionary and letting users self assign favorite words that they like.<br>So I created a table that houses the user id and the term<br>id, this way each user can choose words they want to make their<br>favorite, and the table capture&#39;s the correlated the term id to the user<br>id. This is done by accessing the user and slang term table and<br>getting the respective id&#39;s.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Handling Data Changes</td></tr>
<tr><td> <em>Response:</em> <p>If the term is updated, I plan on making sure the user sees<br>the new updated term. This is done simply because everything from this logic<br>has been implemented in the previous Milestones, if the term were to get<br>altered then it would change everywhere because the pages are getting the info<br>from the same slang table.&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Handle the association of data to a user </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Which option did you need to do to handle the association of data?</td></tr>
<tr><td> <em>Response:</em> <p>For this part I decided to first update the list_slang.php page and add<br>a link to a new file I made called add_to_favorites.php and this allows<br>for the user to add their user_id and slang_id to the user_favorites table.<br>This table was created for this deliverable, and I also updated the slang_helpers.php<br>with including the new&nbsp;addFavoriteWord($user_id, $slang_id) function to store the data in to the<br>table. This allows for the user to be more flexible and add what<br>they want to their personal library of favorite terms.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshots of the updated/created pages related to associating data with the user (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T02.51.37image.png.webp?alt=media&token=3857ffb3-565b-43da-97a7-452726c328be"/></td></tr>
<tr><td> <em>Caption:</em> <p>added the option to add the terms to favorite page to the list<br>page. so after pressing the button it goes to add_to_favorites.php where it grabs<br>the term id and the user id and puts them in to the<br>new favorite words table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T02.55.12image.png.webp?alt=media&token=a140cdcb-abc4-4a10-a576-98bc10e2eee9"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the code for the page and it uses another function called<br>addFavoriteWord($user_id, $slang_id); which takes the user id and term id to allow people<br>to have their own favorites<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T02.57.07image.png.webp?alt=media&token=b8e520e3-27a8-4e02-9136-b516175aecca"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the addFavoriteWord funtion <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T02.58.13image.png.webp?alt=media&token=2b2e8f2f-59bf-4a63-80ad-745fd9aae686"/></td></tr>
<tr><td> <em>Caption:</em> <p>sql code for the new table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.22.29image.png.webp?alt=media&token=d0aba812-0644-4064-a3e5-a0b533228b76"/></td></tr>
<tr><td> <em>Caption:</em> <p>term being added to the table that takes the term id and user<br>id and stores it to the same table<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.24.09image.png.webp?alt=media&token=9f605ac1-95d6-4eff-a27f-ce7e8abb6df0"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows term already being added to the table <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any Heroku prod links to pages that would trigger entity to user association</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/list_slang.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/list_slang.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/72">https://github.com/jasmitsbawa/jb756-it202-007/pull/72</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Logged in user’s associated entities page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What is the data that's associated with the user?</td></tr>
<tr><td> <em>Response:</em> <div>For this deliverable I created a brand new page and an option at<br>the top of the site called favorite words. The entities on this page<br>are the terms and this page lists out all of them, the user<br>has chosen to save in their personal favorite Library. I called this file<br>favorites.php and this page I structured very similarly to the list page. It<br>includes the term that the user selected along with the information if the<br>term was obtained from the API or was manually added in. The two<br>options for the terms are View details which is the same as the<br>view from Milestone to which shows the information about the term and then<br>there is an option to delete the term from the users favorites page.<br>this does not rather just delete the association between the word and the<br>user. I'm able to achieve all of this with a lot of functions<br>that I added to slang_helpers.php which include getUserFavorites, deleteUserFavorite, getTotalFavoritesCount, and getTotalSlangTermsCount. I<br>also included a counter and filters which dynamically change as the user is<br>filtering out certain things. There is also a clear all button which clears<br>all of the data associated with the user. At the same time I<br>took the liberty of implementing the dynamic counter onto the list page, which<br>means if I use the same filters the counter will change dynamically and<br>still display the total number of terms in the database versus the terms<br>being shown.</div><div><br></div><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the logged in user's entities associated with them  (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.17.11image.png.webp?alt=media&token=55cc9ca0-3e5e-4b05-a6bc-bc32aeb3008e"/></td></tr>
<tr><td> <em>Caption:</em> <p>screenshot of the favorites page, there is a dynamic counter that changes, it<br>shows total terms and the terms being shown on screen. There are links<br>to single view which will take the user to the term detail page<br>and there is a remove form favorites button. next to to the filter<br>there is an option that removes the association of the terms from the<br>user by deleting them from the new table.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.24.49image.png.webp?alt=media&token=3854029c-a1e3-46af-89dd-46c9e94e189c"/></td></tr>
<tr><td> <em>Caption:</em> <p>tis screen shot shows the filtering in action it is very similar to<br>the filtering on the list page. in the screen shot you can see<br>that the counter is changing based on what&#39;s on the screen.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.25.09image.png.webp?alt=media&token=cef3cdc8-881d-45f1-9751-741e2345d102"/></td></tr>
<tr><td> <em>Caption:</em> <p>message shows up to make sure if the user wants to delete<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.26.16image.png.webp?alt=media&token=f54e9fff-468c-4ec4-a7a8-a9bfda463cb4"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows all of the entitles being removed for the user<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.28.40image.png.webp?alt=media&token=94bed97a-1375-4b8b-a5b2-ca4a1512769c"/></td></tr>
<tr><td> <em>Caption:</em> <p>the rest of the code<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.29.23image.png.webp?alt=media&token=1017bf0b-60cd-43b7-9dad-44a3cf823217"/></td></tr>
<tr><td> <em>Caption:</em> <p>this my code for the favorites page the counter was interesting to implement<br>i first need to get the count of the term in the data<br>base and then the count of how many are being shown on the<br>screen. getting that data was easy i had to get it from the<br>user favorites table and then use term id and user id provided, and<br>then go to the term table and users table to display that information.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.33.55image.png.webp?alt=media&token=2ba58cbf-c0e6-4064-82e0-e29ca6de6163"/></td></tr>
<tr><td> <em>Caption:</em> <p>the functions i used<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.34.41image.png.webp?alt=media&token=e8d5d762-69a7-4833-9eea-2d997fddbdc0"/></td></tr>
<tr><td> <em>Caption:</em> <p>rest of the functions<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where the logged in user has their entities listed</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/favorites.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/favorites.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/73">https://github.com/jasmitsbawa/jb756-it202-007/pull/73</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> All Users association page (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Describe/Explain the purpose of this page from your project perspective</td></tr>
<tr><td> <em>Response:</em> <div>For the following deliverable all users associations page was very hard to implement<br>and struggled all the way up until this point and wasn't able to<br>move on from here. I was able to get the basics on this<br>page such as the terms that have been associated by going to the<br>favorites table and pulling the ID of each term that has been associated<br>with. At the same time using the same table to see which users<br>are associated with which terms. After this I had an incredible hard amount<br>of time trying to implement a view Details page a delete Association button<br>and a link to the user's respective user profile. The purpose of this<br>page was supposed to allow the admin user to have more freedom and<br>manipulate data from the website.</div><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show screenshots of the entity data associated with many users (include code screenshots)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.41.13image.png.webp?alt=media&token=d7437739-945b-4a42-9dde-dac6b239a30a"/></td></tr>
<tr><td> <em>Caption:</em> <p>this page shows terms and the users associated with those terms along with<br>the number. There is also a dynamic counter at the top. I was<br>not able to get this page fully working but there still is a<br>dynamic counter.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-15T03.44.38image.png.webp?alt=media&token=391fefec-bf29-4381-b898-292b20e08ec9"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the code but i got very confused up until this point.<br>I didn&#39;t really have problem&#39;s with the previous requirements <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) where entities associated to many users can be seen</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/all_users_association.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/all_users_association.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/75">https://github.com/jasmitsbawa/jb756-it202-007/pull/75</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Create a page that shows data not associated with any user (Note: This will likely be an admin page and is not the same as the previous item) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show screenshots of the page showing entities not associated with anyone (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add Heroku Prod links to the page(s) where unassociated entities can be seen</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 3: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Admin can associate any entity with any users (Note: This may be a form on an existing association page if you rather not have a separate page for this) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707795-a9c94a71-7871-4572-bfae-ad636f8f8474.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing evidence of the checklist items (include code screenshots)</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the code logic for this page</td></tr>
<tr><td> <em>Response:</em> <p>(missing)</p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add Heroku Prod links to the page(s) related to this task</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 4: </em> Include any PRs related to this task</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Reflection </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Document any issues/struggles</td></tr>
<tr><td> <em>Response:</em> <p>I had very hard time with admin stuff. It got difficult with mapping<br>the users and how to get to the profiles and i got hung<br>up on that.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Highlight any favorite topics</td></tr>
<tr><td> <em>Response:</em> <p>I loved making a new table and adding info from other table&#39;s to<br>show the favorite words of users. Later accessing that data from the table<br>and using the ids to relocate term/user i am looking for. Then finally<br>bringing that to the favorites page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Overall how do you feel you did with the project and meeting requirements</td></tr>
<tr><td> <em>Response:</em> <p>I feel i could have done a lot better and i am not<br>happy with my performance with this project.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Summarize your experience per the checklist items</td></tr>
<tr><td> <em>Response:</em> <p>I had zero experience with web dev before this class and now I<br>have a very solid foundation that can be built on in the future.<br>If i could take this class again I would focus a lot more<br>but unfortunately I have been taking high level CS class but still i<br>really do apricate the professors patience.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-3-api-project/grade/jb756" target="_blank">Grading</a></td></tr></table>