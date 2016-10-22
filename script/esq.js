window.esq = window.esq || {};

(function($){
$.fn.disableSelection = function() {
    return this
                .attr('unselectable', 'on')
                .css('user-select', 'none')
                .on('selectstart', false);
};
})(jQuery);

window.esq.ExpandedChar = "&#x43;"
window.esq.CollapsedChar = "&#x45;"

window.esq.constraints = function(target, relativeTarget) {
    target = jQuery(target);
    var position = target.position();
    
    var x = position.left;
    var y = position.top;
    
    if(relativeTarget) {
        if(relativeTarget.x) {
            x = position.left - relativeTarget.x;
            y = position.top - relativeTarget.y;
        }
        else {
            relativePosition = relativeTarget.position();
            x = position.left - relativePosition.left;
            y = position.top - relativePosition.top;
        }
    }
    
    return {"x": x, "y": y, "width": target.width(), "height": target.height()};
};

window.esq.urlMerge = function (urla, urlb) {
    return urla + (urla.substr(urla.length - 1, 1) != "/" ? "/" : "") + urlb;
};

window.esq.merge = function(a, b) {
    for (var i in b) {
        if (a[i] === undefined) {
            a[i] = b[i];
        }
    }
    
    return a;
};


window.esq.CollapsiblePanel = function(target, options) {
    var myself = this;
    
    myself.defaultOptions = {
        data: {},
        headerProperty: "name",
        body: null,// selector, dom object, or function that returns a selector or dom object
        state: 1,
        headerClass: "collapsible-header",
        bodyClass: "collapsible-body"
    };
    
    myself.Construct = function() {
        myself.Options = window.esq.merge(options || {}, myself.defaultOptions);

        myself.Parent = jQuery(target);

        var isH3 = jQuery(target).is("h3");

        if(isH3) {
            myself.panelHeader = myself.Parent;
            myself.panelBody = myself.panelHeader.next();
            myself.Parent = myself.Parent.parent();
                
            myself.wrap();
        }
        else {
            myself.panelHeader = jQuery("<h3 />", {});
            myself.panelBody = jQuery("<div />", {});

            myself.Parent.append(myself.panelHeader);
            myself.Parent.append(myself.panelBody);

            myself.build();
        }

        myself.panelHeader.addClass(myself.Options["headerClass"]).disableSelection();
        myself.panelBody.addClass(myself.Options["bodyClass"]);
    }

    myself.build = function() {

    };

    myself.wrap = function() {
        myself.ExpIcon = jQuery("<span />", { "class": "elegant exp-icon", "html": window.esq.ExpandedChar }).css("margin-right", "1em");
        var headerContent = jQuery("<span />", {})
            .append(myself.ExpIcon)
            .append(jQuery("<span />", { "html": myself.panelHeader.html() })).css("cursor", "pointer");
        
        myself.panelHeader.empty();
        myself.panelHeader.append(headerContent);

        myself.panelHeader.click(function() {
            var expanded = myself.panelBody.is(":visible");

            myself.panelHeader.effect("highlight");

            if(!expanded) {
                myself.Expand(myself.ExpIcon);
            }
            else {
                myself.Collapse(myself.ExpIcon); 
            }
        });
    };
    
    myself.Expand = function(context) {
        var icon = context || myself.panelHeader.find("span.exp-icon");
        icon.effect("fade", {}, 400, function() {
            icon.html(window.esq.ExpandedChar);
            icon.effect("fade");
        });
        
        myself.panelBody.show("blind"); 
    };
    
    myself.Collapse = function(context) {
        var icon = context || myself.panelHeader.find("span.exp-icon");
        icon.effect("fade", {}, 400, function() {
            icon.html(window.esq.CollapsedChar);
            icon.effect("fade");
        });
        
        //myself.panelBody.effect("transfer", { to: myself.panelHeader, className: "ui-effects-transfer" }, 500, function() { myself.panelBody.hide(); });
        myself.panelBody.hide("blind");
    };
    
    myself.Construct();
};


window.esq.FileManager = function(target, options) {
    var myself = this;
        
    myself.defaultOptions = {
        data: {},
        height: "400px"
    };
    
    myself.Construct = function() {
        myself.Options = window.esq.merge(options || {}, myself.defaultOptions);

        myself.Parent = jQuery(target);

        myself.Container = jQuery("<div />", {});

        myself.Parent.append(myself.Container);

        myself.build();
    };

    myself.build = function() {
        myself.ToolbarDiv = jQuery("<div />", {"style": "height: 5em; border: 1px solid #333333; border-radius: 3px;"});

        myself.GeneralContainer = jQuery("<div />", {});

        myself.Container.append(myself.ToolbarDiv);
        myself.Container.append(myself.GeneralContainer);
         
        myself.NavigationDiv = jQuery("<div />", {"style": "display: inline-block; width: 200px; border: 1px solid #333333; border-radius: 3px; vertical-align: top; height: "+myself.Options.height+";"});
        myself.FilePanel = jQuery("<div />", {"html": "&nbsp;","style": "display: inline-block; border: 1px solid #333333; border-radius: 3px; vertical-align: top; height: "+myself.Options.height+";"});
        myself.FileInfoPanel = jQuery("<div />", {"style": "display: inline-block; width: 220px; border: 1px solid #333333; border-radius: 3px; vertical-align: top; height: "+myself.Options.height+"; text-align: center;"});

        myself.FileInfoPanel_Preview = jQuery("<div />", {"style": "display: inline-block; width: 200px; height: 200px; background-color: #482603; border-radius: 3px; margin-top: .75em;"});
        myself.FileInfoPanel.append(myself.FileInfoPanel_Preview);

        myself.FileInfoPanel_Data = jQuery("<div />", {"style": "width: 200px; border-radius: 3px; font-size: .8em; text-align: left;"}).html("<div><span>Filename</span><span>Sample</span></div><div><span>Type</span><span>Portable Network Graphic (PNG)</span></div>");
        myself.FileInfoPanel_Data.find("span").css("display", "inline-block").css("vertical-align", "top");
        myself.FileInfoPanel_Data.find("span:odd").css("max-width", "125px")
        myself.FileInfoPanel_Data.find("span:even").css("margin-right","1em").css("width", "50px");
        myself.FileInfoPanel.append(myself.FileInfoPanel_Data);

        myself.GeneralContainer.append(myself.NavigationDiv);
        myself.GeneralContainer.append(myself.FilePanel);
        myself.GeneralContainer.append(myself.FileInfoPanel);
    };

    myself.wrap = function() {
        throw "Not Implemented.";
    };
    
    myself.Construct();
}

window.esq.FileManager.ViewType = {
    "List": 0x01,
    "Detail" : 0x02,
    "Preview" : 0x04
};


// --[ EOF ]-- //