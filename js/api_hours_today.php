//=======================================================================
            // Springshare API object.
            function SpringshareAPI(object_id) {
                this.div_id = object_id;
                this.content = '';
            }
            SpringshareAPI.prototype.render = function() {
                var content_div = document.getElementById(this.div_id);
                
                if ( content_div != null ) {
                    content_div.innerHTML = this.content;
                } else {
                    alert('Content div not found: ' + this.div_id);	
                }
            }
            var obj_api_hours_today_iid1217_lid0 = new SpringshareAPI('api_hours_today_iid1217_lid0');
            obj_api_hours_today_iid1217_lid0.content = '<table class="hours-today" role="presentation"><tr class="hours-alt hours-today-row hours-library loc712"><th class="hours-col-loc">Library</th><td class="hours-col-time"><span class="s-lc-time">8am &ndash; 5pm</span></td></tr><tr class="hours-alt hours-today-row hours-depart dep713"><th class="hours-col-loc">Archives</th><td class="hours-col-time"><span class="s-lc-time">10am &ndash; 4:30pm</span></td></tr><tr class="hours-alt hours-today-row hours-depart dep716"><th class="hours-col-loc">Math Lab &nbsp;&nbsp;</th><td class="hours-col-time"><span class="s-lc-closed">Closed</span></td></tr><tr class="hours-alt hours-today-row hours-depart dep714"><th class="hours-col-loc">Tech Help Desk &nbsp;&nbsp;</th><td class="hours-col-time"><span class="s-lc-closed">Closed</span></td></tr><tr class="hours-alt hours-today-row hours-depart dep6295"><th class="hours-col-loc">CTL Writing Resources &nbsp;&nbsp;</th><td class="hours-col-time"><span class="s-lc-closed">Closed</span></td></tr></table>'; 
            obj_api_hours_today_iid1217_lid0.render();