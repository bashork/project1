
	
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Õppeaasta</label>
                            <select id="pref-perpage" class="form-control">
                                <option value="1" selected='selected' >Kõik õppeaastad</option>
                                <option value="2">2013</option>
                                <option value="3">2014</option>
                                <option value="4">2015</option>
                                <option value="5">2016</option>
                            </select>                                
                        </div> <!-- form group [rows] -->

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Sorteeri:</label>
                            <select id="pref-orderby" class="form-control">
                                <option>Uuemad eespool</option>
                                <option>Vanemad eespool</option>
                            </select>                                
                        </div> <!-- form group [order by] --> 
                        <div class="form-group">    
                            
                            <button type="submit" class="btn btn-block btn-primary ">
                                <span class="glyphicon glyphicon-record"></span> Otsi!
                            </button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span>
        </button>

