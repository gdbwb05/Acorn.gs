<form action="process_form.php" class="TTWForm" method="post" novalidate="">


                        <div id="field1-container" class="field f_100">
                            <label for="field1">
                                Text Field
                            </label>
                            <input name="field1" id="field1" required="required" type="text">
                        </div>


                        <div id="field2-container" class="field f_100">
                            <label for="field2">
                                Select
                            </label>
                            <select name="field2" id="field2" required="required">
                                <option id="field2-1" value="Option 1">
                                    Option 1
                                </option>
                                <option id="field2-2" value="Option 2">
                                    Option 2
                                </option>
                                <option id="field2-3" value="Option 3">
                                    Option 3
                                </option>
                            </select>
                        </div>


                        <div id="field3-container" class="field f_100">
                            <label for="field3">
                                Date
                            </label>
                            <input class="ttw-date date" name="field3" id="field3" required="required"
                                   type="date">
                        </div>


                        <div id="field4-container" class="field f_100">
                            <label for="field4">
                                Range
                            </label>
                            <input class="ttw-range range" name="field4" id="field4" required="required"
                                   type="range">
                        </div>


                        <div id="form-submit" class="field f_100 clearfix submit">
                            <input value="Submit" type="submit">
                        </div>
                    </form>