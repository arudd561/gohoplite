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
        data: {}
    };
    
    myself.Construct = function() {
        myself.Options = window.esq.merge(options || {}, myself.defaultOptions);

        myself.Parent = jQuery(target);

        myself.Container = jQuery("<div />", {});

        myself.Parent.append(myself.Container);
    };

    myself.build = function() {
        myself.ToolbarDiv = jQuery("<div />", {});
        myself.NavigationDiv = jQuery("<div />", {});
    };

    myself.wrap = function() {
        throw "Not Implemented.";
    };
    
    myself.Construct();
}


// --[ EOF ]-- //