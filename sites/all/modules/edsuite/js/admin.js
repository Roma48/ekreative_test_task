var j = jQuery;

j(function(){
    //proposal sections "Made in China" hack...
    if(j('#edit-field-proposal-sections').length > 0) {
        
        j('body').ajaxComplete(function(a, b, c){
            //console.log(a, b, c, c.url);
            
            if(c.url != '/node-embed-edsuite-node')
                rebuildingSections();
        }); 
        
        rebuildingSections();
        
        j('#edit-field-proposal-sections input[id*="make-this-a-sub-section"]').live('click', function(){
            if(j(this).attr("checked") == true) {
                j(this).closest('td').css({ paddingLeft: "50px"});
            } else {
                j(this).closest('td').css({ paddingLeft: "0"});
            }
        });
        
        j('#edit-field-proposal-sections input[id*="section-title"]').live('change', function(){
            var title = j(this).val();
            
            j(this).closest('td').find('.fieldset-title:first').html(title);
        }); 
        
        
        //node embed "Made in China" hack...
        
        j('.form-textarea-wrapper #quicks').remove();
    }
    
    
    //add property Total Sq. Footage calculating
    if(j('#edit-field-sq-footage-und-0-value').length > 0) {
        var totalField = j('#edit-field-sq-footage-und-0-value');
        totalField.attr("readonly", "readonly").css("background", "#eee");
        
        calcTotalSqFootage(totalField);
        
        totalField.closest('form').change(function(){
            calcTotalSqFootage(totalField);
        });
    }
    
    //node logs
    if(j('.node-logs').length > 0) {
        j('.node-logs').live('click', function(){
           var nid = j(this).closest('tr').find('input[id^=edit-views-bulk-operations]').val();
           
           j.ajax({
              url: '/proposal/logs/' + nid,
              type: 'post',
              dataType: 'json',
              success: function(data) {
                
                console.log(data);  
                 
                if(j('#node-logs-container').length > 0) j('#node-logs-container').remove();  
                  
                var str = '<div id="node-logs-container">'; 
                
                if(data.length !== 0) {
                
                    str += '<h1 class="page-title" style="float: left;">Detailed logs</h1>';
                    str += '<a href="#" style="float: right;" onclick="j(this).closest(\'#node-logs-container\').remove(); return false;">Close</a>';

                    str += '<div class="node-logs-table-box"><table class="node-logs-table">';

                    if(data.other != undefined) {

                        str += '<tr><th>When last</th>'; 
                        str += '<th>Total count</th>';
                        str += '<th>What</th></tr>';

                        j.each(data.other, function(key, value){
                            str += '<tr><td>' + value.when_last + '</td>';
                            str += '<td>' + value.count + '</td>';
                            str += '<td>' + value.what + '</td></tr>';
                        });
                    
                    }

                    if(data.views != undefined) {
                          
                        str += '<tr><th>When</th>'; 
                        str += '<th>Who</th>';
                        str += '<th>What</th></tr>';

                        j.each(data.views, function(key, value){
                            str += '<tr><td>' + value.when + '</td>';
                            str += '<td>' + value.who + '</td>';
                            str += '<td>' + value.what + '</td></tr>';
                        });
                    }
                    
                    str += '</table></div>'
                                    
                    str += '</div>';  

                    //console.log(str);

                    j('body').append(str);
                
                } else {
                   alert('No logs found...');
                }
                
              },
              error: function(a, b, c) {
                alert('Error. Please try again.')
                console.log('Ajax error (get node logs): ' + b);
              }
           });
           
           return false;
        });
    }
    //    property add form
    j('#edit-field-property-for-sale-und').change(function(){
        if (j('#edit-field-property-for-sale-und').is(':checked')) {
            j('#node_eds_properties_form_group_sale_price').show();
        }
        else {
            j('#node_eds_properties_form_group_sale_price').hide();
        }
    });
    j('#edit-field-property-for-lease-und').change(function(){
        if (j('#edit-field-property-for-lease-und').is(':checked')) {
            j('#node_eds_properties_form_group_lease_price').show();
        }
        else {
            j('#node_eds_properties_form_group_lease_price').hide();
        }
    });
    j('#edit-field-property-type-und-building').click(function(){
        j('#node_eds_properties_form_group_addition_building').show();
        j('#node_eds_properties_form_group_additional_site').hide();
    });
    j('#edit-field-property-type-und-site').click(function(){
        j('#node_eds_properties_form_group_additional_site').show();
        j('#node_eds_properties_form_group_addition_building').hide();
    });
    if (j('#edit-field-property-for-sale-und').is(':checked')) {
        j('#node_eds_properties_form_group_sale_price').show();
    }
    if (j('#edit-field-property-for-lease-und').is(':checked')) {
        j('#node_eds_properties_form_group_lease_price').show();
    }
    if (j('#edit-field-property-type-und-building').is(':checked')) {
        j('#node_eds_properties_form_group_addition_building').show();
    }
    if (j('#edit-field-property-type-und-site').is(':checked')) {
        j('#node_eds_properties_form_group_additional_site').show();
    }
    
    
    
    if(j('form.node-property_documentation-form').length > 0) {
        
        var checkCheckbox = function(checkbox_field_id, field_box_id) {
            if(j(checkbox_field_id).attr('checked') === false) {
                j(field_box_id).hide();
            } else {
                j(field_box_id).show();
            }
        };
        
        var checkCheckbox2 = function(checkbox_field_id, field_box_id, checkbox_field_id2, field_box_id2) {
            if(j(checkbox_field_id).attr('checked') === false) {
                j(field_box_id).hide();
            } else {
                j(field_box_id).show();
            }
            
            if(j(checkbox_field_id2).attr('checked') === false) {
                j(field_box_id2).hide();
            } else {
                j(field_box_id2).show();
            }            
        };        
        
        //section 1-A
        checkCheckbox('#edit-field-is-there-a-lease-purchase-und-1', '#edit-field-if-yes-description-comment');
        j('#edit-field-if-yes-description-comment').hide();
        j('input[name="field_is_there_a_lease_purchase_[und]"]').click(function(){
            checkCheckbox('#edit-field-is-there-a-lease-purchase-und-1', '#edit-field-if-yes-description-comment');
        });
        
        checkCheckbox('#edit-field-is-there-a-right-of-first-und-1', '#edit-field-feature-description');
        j('input[name="field_is_there_a_right_of_first_[und]"]').click(function(){
            checkCheckbox('#edit-field-is-there-a-right-of-first-und-1', '#edit-field-feature-description');
        });
        
        checkCheckbox('#edit-field-has-a-title-abstract-been-und-1', '#edit-field-title-abstract-file');
        j('input[name="field_has_a_title_abstract_been_[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-title-abstract-been-und-1', '#edit-field-title-abstract-file');
        });  
        
        checkCheckbox('#edit-field-is-the-acreage-sub-divisib-und-1', '#edit-field-if-yes-attach-a-map-showin');
        j('input[name="field_is_the_acreage_sub_divisib[und]"]').click(function(){
            checkCheckbox('#edit-field-is-the-acreage-sub-divisib-und-1', '#edit-field-if-yes-attach-a-map-showin');
        });    
        // section 1-A managers
        checkCheckbox('#edit-field-owners-und-0-field-has-an-intent-to-sell-lett-und-1', '#edit-field-owners-und-0-field-owner-file');
        j('input[name="field_owners[und][0][field_has_an_intent_to_sell_lett][und]"]').click(function(){
            checkCheckbox('#edit-field-owners-und-0-field-has-an-intent-to-sell-lett-und-1', '#edit-field-owners-und-0-field-owner-file');
        }); 
        
        // section 1-B
        checkCheckbox('#edit-field-has-a-copy-of-the-option-b-und-1', '#edit-field-file-b');
        j('input[name="field_has_a_copy_of_the_option_b[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-copy-of-the-option-b-und-1', '#edit-field-file-b');
        }); 
        
        // section 1-C
        checkCheckbox2('#edit-field-s-site-within-incorporated-und-1', '#edit-field-if-so-what-municipality-', '#edit-field-s-site-within-incorporated-und-0', '#edit-field-what-is-the-name-of-the-in');
        j('input[name="field_s_site_within_incorporated[und]"]').click(function(){
            checkCheckbox2('#edit-field-s-site-within-incorporated-und-1', '#edit-field-if-so-what-municipality-', '#edit-field-s-site-within-incorporated-und-0', '#edit-field-what-is-the-name-of-the-in');
        }); 
        
        checkCheckbox2('#edit-field-is-the-site-within-a-zonin-und-1', '#edit-field-if-yes-contact-name-agency', '#edit-field-is-the-site-within-a-zonin-und-0', '#edit-field-if-zoned-briefly-describe-');
        j('input[name="field_is_the_site_within_a_zonin[und]"]').click(function(){
            checkCheckbox2('#edit-field-is-the-site-within-a-zonin-und-1', '#edit-field-if-yes-contact-name-agency', '#edit-field-is-the-site-within-a-zonin-und-0', '#edit-field-if-zoned-briefly-describe-');
        });
        
        checkCheckbox('#edit-field-if-zoned-has-a-copy-of-the-und-1', '#edit-field-if-zoning-regulation-is-at');
        j('input[name="field_if_zoned_has_a_copy_of_the[und]"]').click(function(){
            checkCheckbox('#edit-field-if-zoned-has-a-copy-of-the-und-1', '#edit-field-if-zoning-regulation-is-at');
        });  
        
        checkCheckbox('#edit-field-are-there-any-restrictions-und-1', '#edit-field-if-yes-please-describe-');
        j('input[name="field_are_there_any_restrictions[und]"]').click(function(){
            checkCheckbox('#edit-field-are-there-any-restrictions-und-1', '#edit-field-if-yes-please-describe-');
        }); 
        
        checkCheckbox('#edit-field-are-there-any-height-restr-und-1', '#edit-field-if-yes-please-describe2');
        j('input[name="field_are_there_any_height_restr[und]"]').click(function(){
            checkCheckbox('#edit-field-are-there-any-height-restr-und-1', '#edit-field-if-yes-please-describe2');
        });   
        
        checkCheckbox('#edit-field-are-there-any-height-restr-und-1', '#edit-field-describe-any-land-use-rest');
        j('input[name="field_are_there_any_height_restr[und]"]').click(function(){
            checkCheckbox('#edit-field-are-there-any-height-restr-und-1', '#edit-field-describe-any-land-use-rest');
        });   
        
        checkCheckbox('#edit-field-are-adjacent-properties-zo-und-1', '#edit-field-attach-map-showing-adjacen');
        j('input[name="field_are_adjacent_properties_zo[und]"]').click(function(){
            checkCheckbox('#edit-field-are-adjacent-properties-zo-und-1', '#edit-field-attach-map-showing-adjacen');
        });
        
        checkCheckbox('#edit-field-has-a-copy-of-the-latest-a-und-1', '#edit-field-if-yes-include-exhibit-and');
        j('input[name="field_has_a_copy_of_the_latest_a[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-copy-of-the-latest-a-und-1', '#edit-field-if-yes-include-exhibit-and');
        });   
        
        checkCheckbox('#edit-field-is-the-site-subject-to-fre-und-1', '.group_c3');
        j('input[name="field_is_the_site_subject_to_fre[und]"]').click(function(){
            checkCheckbox('#edit-field-is-the-site-subject-to-fre-und-1', '.group_c3');
        }); 
        
        checkCheckbox('#edit-field-federal-zone-und-1', '#edit-field-if-yes-list-which-zone-s-');
        j('input[name="field_federal_zone[und]"]').click(function(){
            checkCheckbox('#edit-field-federal-zone-und-1', '#edit-field-if-yes-list-which-zone-s-');
        });
        
        checkCheckbox('#edit-field-state-zone-und-1', '#edit-field-state-zone-c3');
        j('input[name="field_state_zone[und]"]').click(function(){
            checkCheckbox('#edit-field-state-zone-und-1', '#edit-field-state-zone-c3');
        }); 
        
        //section 1-D
        checkCheckbox('#edit-field-are-there-any-cemeteries-l-und-1', '#edit-field-cemeteries-located');
        j('input[name="field_are_there_any_cemeteries_l[und]"]').click(function(){
            checkCheckbox('#edit-field-are-there-any-cemeteries-l-und-1', '#edit-field-cemeteries-located');
        });
        
        checkCheckbox('#edit-field-if-current-and-existing-st-und-1', '#edit-field-d-file');
        j('input[name="field_if_current_and_existing_st[und]"]').click(function(){
            checkCheckbox('#edit-field-if-current-and-existing-st-und-1', '#edit-field-d-file');
        }); 
        
        // section 1-E
        checkCheckbox('#edit-field-has-a-copy-of-the-deed-bee-und-1', '#edit-field-e1');
        j('input[name="field_has_a_copy_of_the_deed_bee[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-copy-of-the-deed-bee-und-1', '#edit-field-e1');
        }); 
        
        checkCheckbox('#edit-field-provide-an-alta-or-land-ti-und-1', '#edit-field-e2');
        j('input[name="field_provide_an_alta_or_land_ti[und]"]').click(function(){
            checkCheckbox('#edit-field-provide-an-alta-or-land-ti-und-1', '#edit-field-e2');
        }); 
        
        // section 2-A
        checkCheckbox('#edit-field-has-a-letter-from-the-prov-und-1', '#edit-field-2a3');
        j('input[name="field_has_a_letter_from_the_prov[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-letter-from-the-prov-und-1', '#edit-field-2a3');
        }); 
        
        if(j('#edit-field-has-a-plan-to-improve-or-u-und-1').attr('checked') === false) {
            j('#edit-field-2a4').hide();
            j('#edit-field-if-yes-can-this-plan-be-ex').hide();
            j('#edit-field-if-the-plan-can-be-impleme').hide();
        } else {
            j('#edit-field-2a4').show();
            j('#edit-field-if-yes-can-this-plan-be-ex').show();
            j('#edit-field-if-the-plan-can-be-impleme').show();
        }
        j('input[name="field_has_a_plan_to_improve_or_u[und]"]').click(function(){
            if(j('#edit-field-has-a-plan-to-improve-or-u-und-1').attr('checked') === false) {
                j('#edit-field-2a4').hide();
                j('#edit-field-if-yes-can-this-plan-be-ex').hide();
                j('#edit-field-if-the-plan-can-be-impleme').hide();
            } else {
                j('#edit-field-2a4').show();
                j('#edit-field-if-yes-can-this-plan-be-ex').show();
                j('#edit-field-if-the-plan-can-be-impleme').show();
            }
        });
        
        // section 2-B
        if(j('#edit-field-is-there-process-water-ava-und-1').attr('checked') === false) {
            j('#edit-field-if-yes-provide-company-age').hide();
            j('#edit-field-if-yes-explain-the-source-').hide();
            j('#edit-field-2b1').hide();
            j('#edit-field-2b2').hide();
        } else {
            j('#edit-field-if-yes-provide-company-age').show();
            j('#edit-field-if-yes-explain-the-source-').show();
            j('#edit-field-2b1').show();
            j('#edit-field-2b2').show();
        }
        
        if(j('#edit-field-is-there-process-water-ava-und-0').attr('checked') === false) {
            j('#edit-field-if-the-process-water-is-no').hide();
            j('#edit-field-2b-textarea').hide();
        } else {
            j('#edit-field-if-the-process-water-is-no').show();
            j('#edit-field-2b-textarea').show();
        }
        j('input[name="field_is_there_process_water_ava[und]"]').click(function(){
            if(j('#edit-field-is-there-process-water-ava-und-1').attr('checked') === false) {
                j('#edit-field-if-yes-provide-company-age').hide();
                j('#edit-field-if-yes-explain-the-source-').hide();
                j('#edit-field-2b1').hide();
                j('#edit-field-2b2').hide();
            } else {
                j('#edit-field-if-yes-provide-company-age').show();
                j('#edit-field-if-yes-explain-the-source-').show();
                j('#edit-field-2b1').show();
                j('#edit-field-2b2').show();
            }
            
            if(j('#edit-field-is-there-process-water-ava-und-0').attr('checked') === false) {
                j('#edit-field-if-the-process-water-is-no').hide();
                j('#edit-field-2b-textarea').hide();
            } else {
                j('#edit-field-if-the-process-water-is-no').show();
                j('#edit-field-2b-textarea').show();
            }            
        });
        
        // section 2-C
        checkCheckbox('#edit-field-2c4-und-0', '#edit-field-if-not-what-is-the-basis-f');
        j('input[name="field_2c4[und]"]').click(function(){
            checkCheckbox('#edit-field-2c4-und-0', '#edit-field-if-not-what-is-the-basis-f');
        }); 
        
        if(j('#edit-field-2c7-und-1').attr('checked') === false) {
            j('#edit-field-2c9').hide();
            j('#edit-field-2c10').hide();
        } else {
            j('#edit-field-2c9').show();
            j('#edit-field-2c10').show();
        }
        j('input[name="field_2c7[und]"]').click(function(){
            if(j('#edit-field-2c7-und-1').attr('checked') === false) {
                j('#edit-field-2c9').hide();
                j('#edit-field-2c10').hide();
            } else {
                j('#edit-field-2c9').show();
                j('#edit-field-2c10').show();
            }
        });
        
        checkCheckbox('#edit-field-has-a-plan-to-establish-an-und-1', '#edit-field-2c11');
        j('input[name="field_has_a_plan_to_establish_an[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-plan-to-establish-an-und-1', '#edit-field-2c11');
        });
        
        // section 2-D
        if(j('#edit-field-is-3-phase-service-availab-und-0').attr('checked') === false) {
            j('#edit-field-2d3').hide();
            j('#edit-field-what-additional-services-a').hide();
            j('#edit-field-2d4').hide();
        } else {
            j('#edit-field-2d3').show();
            j('#edit-field-what-additional-services-a').show();
            j('#edit-field-2d4').show();
        }
        j('input[name="field_is_3_phase_service_availab[und]"]').click(function(){
            if(j('#edit-field-is-3-phase-service-availab-und-0').attr('checked') === false) {
                j('#edit-field-2d3').hide();
                j('#edit-field-what-additional-services-a').hide();
                j('#edit-field-2d4').hide();
            } else {
                j('#edit-field-2d3').show();
                j('#edit-field-what-additional-services-a').show();
                j('#edit-field-2d4').show();
            }
        }); 
        
        // section 2-F
        if(j('#edit-field-do-any-pipelines-of-any-ty-und-1').attr('checked') === false) {
            j('#edit-field-f-yes-provide-a-site-map-w').hide();
            j('#edit-field-2f1').hide();
        } else {
            j('#edit-field-f-yes-provide-a-site-map-w').show();
            j('#edit-field-2f1').show();
        }
        j('input[name="field_do_any_pipelines_of_any_ty[und]"]').click(function(){
            if(j('#edit-field-do-any-pipelines-of-any-ty-und-1').attr('checked') === false) {
                j('#edit-field-f-yes-provide-a-site-map-w').hide();
                j('#edit-field-2f1').hide();
            } else {
                j('#edit-field-f-yes-provide-a-site-map-w').show();
                j('#edit-field-2f1').show();
            }
        });
        
        //section 2-G
        checkCheckbox('#edit-field-has-a-site-map-indicating-und-1', '#edit-field-2g1');
        j('input[name="field_has_a_site_map_indicating_[und]"]').click(function(){
            checkCheckbox('#edit-field-has-a-site-map-indicating-und-1', '#edit-field-2g1');
        });
        
        if(j('#edit-field-if-a-plan-is-underway-to-i-und-1').attr('checked') === false) {
            j('#edit-field-2g3').hide();
            j('#edit-field-if-a-plan-has-been-develop').hide();
            j('#edit-field-can-the-plan-be-executed-w').hide();
            j('#edit-field-if-yes-what-is-the-basis-f').hide();            
        } else {
            j('#edit-field-2g3').show();
            j('#edit-field-if-a-plan-has-been-develop').show();
            j('#edit-field-can-the-plan-be-executed-w').show();
            j('#edit-field-if-yes-what-is-the-basis-f').show();            
        }
        j('input[name="field_if_a_plan_is_underway_to_i[und]"]').click(function(){
            if(j('#edit-field-if-a-plan-is-underway-to-i-und-1').attr('checked') === false) {
                j('#edit-field-2g3').hide();
                j('#edit-field-if-a-plan-has-been-develop').hide();
                j('#edit-field-can-the-plan-be-executed-w').hide();
                j('#edit-field-if-yes-what-is-the-basis-f').hide();            
            } else {
                j('#edit-field-2g3').show();
                j('#edit-field-if-a-plan-has-been-develop').show();
                j('#edit-field-can-the-plan-be-executed-w').show();
                j('#edit-field-if-yes-what-is-the-basis-f').show();            
            }
        }); 
        
        checkCheckbox('#edit-field-can-the-plan-be-executed-w-und-1', '#edit-field-if-yes-what-is-the-basis-f');
        j('input[name="field_can_the_plan_be_executed_w[und]"]').click(function(){
            checkCheckbox('#edit-field-can-the-plan-be-executed-w-und-1', '#edit-field-if-yes-what-is-the-basis-f');
        });
        
        //section 2-J
        checkCheckbox('#edit-field-if-rail-does-not-serve-the-und-1', '#edit-field-2j1');
        j('input[name="field_if_rail_does_not_serve_the[und]"]').click(function(){
            checkCheckbox('#edit-field-if-rail-does-not-serve-the-und-1', '#edit-field-2j1');
        });
        
        // section 2-K
        checkCheckbox('#edit-field-are-there-any-air-draft-li-und-1', '#edit-field-if-yes-please-list-limitat');
        j('input[name="field_are_there_any_air_draft_li[und]"]').click(function(){
            checkCheckbox('#edit-field-are-there-any-air-draft-li-und-1', '#edit-field-if-yes-please-list-limitat');
        });
        
        //section 2-L
        if(j('#edit-field-has-a-copy-of-a-preliminar-und-1').attr('checked') === false) {
            j('#edit-field-l1-4').hide();
            j('#edit-field-if-yes-does-the-geotechnic').hide();
            j('#edit-field-if-yes-does-the-study-indi').hide();
            j('#edit-field-if-yes-is-soil-augmentatio').hide();            
        } else {
            j('#edit-field-l1-4').show();
            j('#edit-field-if-yes-does-the-geotechnic').show();
            j('#edit-field-if-yes-does-the-study-indi').show();
            j('#edit-field-if-yes-is-soil-augmentatio').show();            
        }
        j('input[name="field_has_a_copy_of_a_preliminar[und]"]').click(function(){
            if(j('#edit-field-has-a-copy-of-a-preliminar-und-1').attr('checked') === false) {
                j('#edit-field-l1-4').hide();
                j('#edit-field-if-yes-does-the-geotechnic').hide();
                j('#edit-field-if-yes-does-the-study-indi').hide();
                j('#edit-field-if-yes-is-soil-augmentatio').hide();            
            } else {
                j('#edit-field-l1-4').show();
                j('#edit-field-if-yes-does-the-geotechnic').show();
                j('#edit-field-if-yes-does-the-study-indi').show();
                j('#edit-field-if-yes-is-soil-augmentatio').show();            
            }
        }); 
        
        checkCheckbox('#edit-field-are-additional-maps-such-a-und-1', '#edit-field-l1-6');
        j('input[name="field_are_additional_maps_such_a[und]"]').click(function(){
            checkCheckbox('#edit-field-are-additional-maps-such-a-und-1', '#edit-field-l1-6');
        }); 
        
        // section 2-M
        checkCheckbox('#edit-field-was-the-result-from-phase-und-0', '#edit-field-if-no-what-additional-reco');
        j('input[name="field_was_the_result_from_phase_[und]"]').click(function(){
            checkCheckbox('#edit-field-was-the-result-from-phase-und-0', '#edit-field-if-no-what-additional-reco');
        }); 
        
        checkCheckbox('#edit-field-do-the-findings-of-phase-i-und-1', '#edit-field-if-yes-has-a-phase-ii-envi');
        j('input[name="field_do_the_findings_of_phase_i[und]"]').click(function(){
            checkCheckbox('#edit-field-do-the-findings-of-phase-i-und-1', '#edit-field-if-yes-has-a-phase-ii-envi');
        });    
        
        checkCheckbox('#edit-field-if-a-phase-ii-has-been-com-und-1', '#edit-field-m1-2');
        j('input[name="field_if_a_phase_ii_has_been_com[und]"]').click(function(){
            checkCheckbox('#edit-field-if-a-phase-ii-has-been-com-und-1', '#edit-field-m1-2');
        });    

        checkCheckbox('#edit-field-if-a-wetlands-determinatio-und-1', '#edit-field-if-yes-will-or-have-the-we');
        j('input[name="field_if_a_wetlands_determinatio[und]"]').click(function(){
            checkCheckbox('#edit-field-if-a-wetlands-determinatio-und-1', '#edit-field-if-yes-will-or-have-the-we');
        });     
        
        checkCheckbox('#edit-field-if-wetlands-are-present-ha-und-1', '#edit-field-m1-7');
        j('input[name="field_if_wetlands_are_present_ha[und]"]').click(function(){
            checkCheckbox('#edit-field-if-wetlands-are-present-ha-und-1', '#edit-field-m1-7');
        });
        
        checkCheckbox('#edit-field-m1-8-und-1', '#edit-field-m1-9');
        j('input[name="field_m1_8[und]"]').click(function(){
            checkCheckbox('#edit-field-m1-8-und-1', '#edit-field-m1-9');
        }); 
        
        checkCheckbox('#edit-field-m1-10-und-1', '#edit-field-m1-11');
        j('input[name="field_m1_10[und]"]').click(function(){
            checkCheckbox('#edit-field-m1-10-und-1', '#edit-field-m1-11');
        });          
    }


});

function calcTotalSqFootage(obj) {
    var total = 0;
    total += Number(j('#edit-field-office-sq-footage-und-0-value').val());
    total += Number(j('#edit-field-retail-sq-footage-und-0-value').val());
    total += Number(j('#edit-field-warehouse-sq-footage-und-0-value').val());
    total += Number(j('#edit-field-manufacturing-sq-footage-und-0-value').val());

    obj.val(total);
}

function rebuildingSections() {
    j.each(j('.group-proposal-section'), function(key, section){

        //close section
        j(section).addClass('collapsed');
        
        //reload wysiwyg
        //j(section).find('select.wysiwyg.form-select').change();

        var title = j(section).find('input[id*="section-title"]').val();
        if(title == '' || title.length == 0)
            title = 'Empty Title';

        var isSubSection = (j(section).find('input[id*="make-this-a-sub-section"]').attr("checked") == true) ? true : false;

        //moving sub section
        if(isSubSection) {
            //j(section).css({marginLeft: "30px"});
            j(section).closest("td").css({ paddingLeft: "50px"});
        }

        //set title
        j(section).find('.fieldset-title:first').html(title);
        //console.log(title);
     });
        
}

