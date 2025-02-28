<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 API Project</td></tr>
<tr><td> <em>Student: </em> Jasmit Bawa (jb756)</td></tr>
<tr><td> <em>Generated: </em> 12/7/2023 12:10:32 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/jb756" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Define the appropriate table or tables for your API </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the table definition SQL files</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-05T00.40.13image.png.webp?alt=media&token=11a1a74d-bff4-4aaf-97c5-36e55262f1ff"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the slang_terms table that holds all of the slang terms from<br>the user and API. This holds the id, dates, term, definition, and source.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Mappings</td></tr>
<tr><td> <em>Response:</em> <p>The slang_terms tab has a total of 7 columns witch are id, created,<br>modified, term, definition, example, and source. The id is an int, the created<br>and modified are timestamp to show if the data had been altered with.<br>term and definition are required fields, for terms the value is VARCHAR(255) since<br>a word or phrase can only be so long. Definition is TEXT because<br>you may have to include a lot of stuff to explain what the<br>term is, when it comes to example it is also TEXT because it<br>can be a long sentence showing it in action but this field is<br>not required because the API can return a term without an example.<div><br></div><div><br></div><div>I used<br>the admin user which is &quot;<a href="mailto:&#106;&#97;&#115;&#x6d;&#105;&#116;&#x31;&#x38;&#54;&#48;&#x40;&#103;&#109;&#x61;&#x69;&#x6c;&#46;&#x63;&#x6f;&#x6d;">&#106;&#97;&#115;&#x6d;&#105;&#116;&#x31;&#x38;&#54;&#48;&#x40;&#103;&#109;&#x61;&#x69;&#x6c;&#46;&#x63;&#x6f;&#x6d;</a>&quot; and the password: asdfghjkl</div><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/5">https://github.com/jasmitsbawa/jb756-it202-007/pull/5</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Data Creation Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of the Page and the Code (at least two)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-05T19.30.53image.png.webp?alt=media&token=954bda0c-a3f6-43b4-94ae-0a13ed70ce45"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is what my data creation page looks like.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-05T19.34.33image.png.webp?alt=media&token=b3cd79c7-7ab3-4aae-88da-ac9cfee3b86f"/></td></tr>
<tr><td> <em>Caption:</em> <p>The code for the add_slang.php page. The only thing that is not REQUIRED<br>is the example box.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T04.46.03image.png.webp?alt=media&token=7eede487-aca7-4b5b-aa13-ff879a597746"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the function for adding the content into to the table. Since<br>this is the urban dictionary api there are my different words and ways<br>of writing this. This is why there is no need for a data<br>validation.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T18.51.15image.png.webp?alt=media&token=ff799a99-0b53-4e6a-b3b6-41934f214740"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is me adding the word Hammeo with all of the correct data<br>filled<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T18.51.45image.png.webp?alt=media&token=9d84530a-4c8e-41e9-9f38-fc898a5ad3b3"/></td></tr>
<tr><td> <em>Caption:</em> <p>The message pops up saying you created the data properly.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T18.52.08image.png.webp?alt=media&token=d439b4cf-112b-4c57-b225-b78ad10e3d1e"/></td></tr>
<tr><td> <em>Caption:</em> <p>I added Hammeo in to the table and the page checks the table<br>to see if I am making a duplicate. Message shows it is a<br>duplicate.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Database Results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T19.02.34image.png.webp?alt=media&token=efce3017-c77c-46db-9e31-2d83b3078b00"/></td></tr>
<tr><td> <em>Caption:</em> <p>In the add_slang.php I manually set the source to manual and in the<br>api_fetch.php I manually set the source to API so there are no confusions<br>what come from where.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Misc Checklist</td></tr>
<tr><td> <em>Response:</em> <p>My entities are unique based of the term entered, you can not enter<br>a term more than once.&nbsp; The duplicate detection is being done in the<br>addSlangTerm function. it basically sends out a query with the term entered and<br>fetches all of the columns.&nbsp; If the query returns any number greater than<br>0 it throws an error and says that the term is already in<br>the table. For the API fetch there are so many terms in the<br>API that there is a very low possibility of it returning the same<br>term so there is no duplicate check for API. Anyone who is logged<br>in can create data and it in to the table allowing users to<br>share there ideas.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/add_slang.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/add_slang.php</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/56">https://github.com/jasmitsbawa/jb756-it202-007/pull/56</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/60">https://github.com/jasmitsbawa/jb756-it202-007/pull/60</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Data List Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot the list page and code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T17.51.16image.png.webp?alt=media&token=adf9250d-2989-4951-a1f9-d3cc558756b9"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the listing of the data, both manual and API, and it defaults<br>to showing 10 terms. All the way to the left you can see<br>that there is an option to edit, view and delete. I am using<br>an admin profile and they are able to use the edit and delete<br>terms.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T20.00.13image.png.webp?alt=media&token=634c2590-0753-459e-8171-adff9b4a99af"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am filtering terms that have a<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T20.01.39image.png.webp?alt=media&token=e8436a9c-af8d-4a96-a2c5-75b55356d998"/></td></tr>
<tr><td> <em>Caption:</em> <p>I am filtering terms that have a and are included from the API<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T20.04.03image.png.webp?alt=media&token=4a498b39-f558-4457-b865-2915d180e1b1"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screen shot shows that it is limiting the user to 1 to<br>100 terms being shown<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-06T20.09.11image.png.webp?alt=media&token=13239190-6211-47aa-a7fa-138d95f5deb9"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screen shot shows an unsuccessful filter where the table did not return<br>anything.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.53.24image.png.webp?alt=media&token=99727354-4dc0-4019-88e7-52e849e7f622"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the code for the list_slang.php (1/3)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.54.28image.png.webp?alt=media&token=5e8fcf01-1b2d-4652-9d01-cd34b6887fbe"/></td></tr>
<tr><td> <em>Caption:</em> <p>(2/3)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.54.48image.png.webp?alt=media&token=ca687245-d135-4a30-ac7f-09cadddfe020"/></td></tr>
<tr><td> <em>Caption:</em> <p>(3/3)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.55.19image.png.webp?alt=media&token=25bfac18-275e-437a-8179-746c531f2689"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the function used in list_slang.php<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Everyone is able to access the list and view page to see what<br>words are available and be able to find what the they are looking<br>for. Only the words and source is being shown and when the user<br>presses on the view page, which is accessed through the id of the<br>term the user clicks on. After clicking on it you can see the<br>definition and example. Only the admin can access the edit and delete links<br>on the page. The filters I used were simple, you can search by<br>typing in the spacebar, the user can decide to show 1 to 100<br>entities, and you can filter the terms by the source as well.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/list_slang.php">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/list_slang.php</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/62">https://github.com/jasmitsbawa/jb756-it202-007/pull/62</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/60">https://github.com/jasmitsbawa/jb756-it202-007/pull/60</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/57">https://github.com/jasmitsbawa/jb756-it202-007/pull/57</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> View Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.17.21image.png.webp?alt=media&token=682d1595-5cc3-4db6-801c-654d3ed43dd7"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screen shot includes the dev url showing that the query parameter is<br>captured from the URL. &quot;id=423&quot; is the id number for the word Brynne<br>and the structure of the page is a tablewith the information being included<br>on the left side, it also includes the definition and example on this<br>page which is not included on the list page. All the way at<br>the bottom there is an option to edit and delete, and I also<br>included a back button.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.18.07image.png.webp?alt=media&token=33b02655-5753-40c1-ad36-79446996da95"/></td></tr>
<tr><td> <em>Caption:</em> <p>This screen shot shows that I tried to access id=410 which doesn&#39;t exists,<br>so the page redirects to the list page with a message saying &quot;Slang<br>term not found&quot;.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.56.00image.png.webp?alt=media&token=5574a6dd-c7e2-420a-98e2-8f38d6b04c00"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the code for the view_slang.php<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T03.56.47image.png.webp?alt=media&token=36386d5a-d9e2-42d5-b8ba-7babd2feb54f"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the function used to get a specific term by id<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>The view page shows definition and example for the term which is not<br>shown on the list page. Only the admin is allowed to edit and<br>delete a term on this page.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/view_slang.php?id=423">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/view_slang.php?id=423</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/58">https://github.com/jasmitsbawa/jb756-it202-007/pull/58</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/60">https://github.com/jasmitsbawa/jb756-it202-007/pull/60</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Edit Data Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of Page and related content/code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.04.48image.png.webp?alt=media&token=1cd8068c-c142-4538-aeb8-130e7e343f5f"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the code for edit_slang.php (1/2)<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.05.36image.png.webp?alt=media&token=07dfbac1-7f4f-46f3-98ed-4a939e69a857"/></td></tr>
<tr><td> <em>Caption:</em> <p>(2/2)<br><br>this grabs the information of the term and prefills the data in the<br>boxes<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.07.47image.png.webp?alt=media&token=e057b466-d325-4d6b-b3cf-3eedd79c44eb"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the edit page for the Brynne term, it shows that the<br>data is prefilled. the id is fetched from the url and passed to<br>the function.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.13.27image.png.webp?alt=media&token=890c45f0-efdb-4b54-9b9f-20554e05b801"/></td></tr>
<tr><td> <em>Caption:</em> <p>i removed the example for the term and there is a good message.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.14.43image.png.webp?alt=media&token=802a606a-b666-4304-9067-00dd33f78250"/></td></tr>
<tr><td> <em>Caption:</em> <p>an incorrect id is passed and there is an appropriate message<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.16.06image.png.webp?alt=media&token=c17c44f2-a7f2-480c-b9c6-9d9498cc7372"/></td></tr>
<tr><td> <em>Caption:</em> <p>this shows that the definition needs to be filled out.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.18.21image.png.webp?alt=media&token=177c8719-07c3-43f4-b937-be223fd3c59b"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the update slang function <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a direct link to this file on Heroku Prod</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://it202-jb756-prod-188c6f308204.herokuapp.com/project/edit_slang.php?id=423">https://it202-jb756-prod-188c6f308204.herokuapp.com/project/edit_slang.php?id=423</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/60">https://github.com/jasmitsbawa/jb756-it202-007/pull/60</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/59">https://github.com/jasmitsbawa/jb756-it202-007/pull/59</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Delete Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of related code/evidence</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.20.19image.png.webp?alt=media&token=aa21e1a6-752c-4a66-be51-2a0be0c95e37"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the code for delete_slang.php<br><br>there is an admin check in the code,<br>a user will not be able to access the delete function.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.21.08image.png.webp?alt=media&token=f9e001ac-19b0-4b52-97d3-61006680d75c"/></td></tr>
<tr><td> <em>Caption:</em> <p>this function helps delete the term<br><br>the function takes the  id and uses<br>a query statement to delete the where it finds the id<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.26.13image.png.webp?alt=media&token=cbfb94a6-8138-43f9-b69d-9280080ddd7b"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the list page with terms filtered with the letter &quot;b&quot;<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.27.15image.png.webp?alt=media&token=af6b480e-7ffb-406d-b064-318972d9f954"/></td></tr>
<tr><td> <em>Caption:</em> <p>After deleting the word obsen the filters stay on the page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>Deletion is only handled by the admin user and the deletion is a<br>hard delete. The deletion is handled by id which is fetched from the<br>URL. Implementing the filter delete was difficult but I had to find away<br>of capturing the filter and then use that info to keep the filter<br>running after pressing the delete option. I changed the delete option from href<br>to button because i did not want to refresh the page and take<br>me to the default list page.&nbsp;<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/60">https://github.com/jasmitsbawa/jb756-it202-007/pull/60</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/62/files">https://github.com/jasmitsbawa/jb756-it202-007/pull/62/files</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> API Handling </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshots of Code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.37.15image.png.webp?alt=media&token=78025d24-ec31-406d-b667-75fa0194181e"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is me implementing the code from rapid api, I use the addSlangTerm<br>function to map the data to the same table. I hard coded that<br>when I press on this as an admin it will list the words<br>and it will hard code the source as API, this way we know<br>which terms cam from which source.<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T04.39.18image.png.webp?alt=media&token=3ec9a974-c66d-4123-9209-fb842c659b77"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is me pressing on Fetch API<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explanation</td></tr>
<tr><td> <em>Response:</em> <p>This is using the addSlangTerm function but this time the data is being<br>received from the API and the source is being hard coded as &quot;API&quot;.&nbsp;<br>The API call is triggered through a button that the Admin has access<br>to, and when pressed it lists out what was added to the table.<br>I am going to use the data to allow users to choose there<br>word of the day and make their own words as they wish.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add any related PRs for this task</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/61">https://github.com/jasmitsbawa/jb756-it202-007/pull/61</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/jasmitsbawa/jb756-it202-007/pull/63/files">https://github.com/jasmitsbawa/jb756-it202-007/pull/63/files</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What issues did you face and overcome during this milestone?</td></tr>
<tr><td> <em>Response:</em> <p>During this Milestone I had difficulty starting and see where to put files,<br>but once I started the ideas started to flow. I feel as though<br>I am more independent after this Milestone.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> What did you find the easiest?</td></tr>
<tr><td> <em>Response:</em> <p>The easiest thing to implement was the add_slang.php because it was just the<br>user implementing stuff and the backend taking that info and adding it to<br>the table.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> What did you find the hardest?</td></tr>
<tr><td> <em>Response:</em> <p>I found adding filter deletion the hardest because in the beginning the page<br>would keep refreshing when i would delete a term while it was filtered.<br>Eventually I was able to capture the filters from the url and save<br>them during the deletion.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Did you have to utilize any unanticipated APIs?</td></tr>
<tr><td> <em>Response:</em> <p>No i just had to use the urban dictionary API<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a screenshot of your project board</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fjb756%2F2023-12-07T05.00.15image.png.webp?alt=media&token=b14ba6d9-b4a2-4e3b-a429-45e32ad60a66"/></td></tr>
<tr><td> <em>Caption:</em> <p>all of the tasks completed<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-007-F23/it202-milestone-2-api-project/grade/jb756" target="_blank">Grading</a></td></tr></table>