package com.mta.th10.bacsigiadinh.viewmodels;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

@Root(name = "item")
public class RssItem {
	@Element
	private String title;

	@Element
	private String description;

	@Element
	private String pubDate;

	@Element
	private String link;

	@Element
	private String guid;

	@Element
	private String comments;

	public String getTitle() {
		return title;
	}

	public String getDescription() {
		return description;
	}

	public String getPubDate() {
		return pubDate;
	}

	public String getLink() {
		return link;
	}

	public String getGuid() {
		return guid;
	}

	public String getComments() {
		return comments;
	}
	
	public String getImageUrl()
	{
		//Được lấy trong description ra
		String s = getDescription();
		if(s != null)
		{
			int start = s.indexOf("src=") + 5;
			int end = s.indexOf(".jpg") + 4;
			if(start > 0 && end > 0 && start < end)
			{
				s = s.substring(start, end);
				return s;
			}
			
		}
		return null;
	}

}
